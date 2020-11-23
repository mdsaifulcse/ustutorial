<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Menu;
use App\Model\SubMenu;
use App\Model\Page;
use Validator,MyHelper;
use Yajra\Acl\Models\Permission;

class SubMenuController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = $request->all();

        if(isset($input['page'])){
            $page=Page::select('name','name_bn')->where('link',$input['page'])->first();
            $input['name']=$page['name'];
            $input['name_bn']=$page['name_bn'];
            $input['url']="page/".$input['page'];

        }

        $validator = Validator::make($input, [   
                    'name'          => 'required',
                    'url'    => 'required',
                    'icon' => 'mimes:jpeg,jpg,bmp,png'
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

        try{
            $input['slug']=json_encode($request->slug);

            if ($request->hasFile('icon')){
                $input['icon']=MyHelper::photoUpload($request->file('icon'),'images/menu/sub-menu/icon/',32);
                $input['big_icon']=MyHelper::photoUpload($request->file('icon'),'images/menu/sub-menu/big-icon/',128);

            }

            SubMenu::create($input);
                $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect()->back()->with('success','Successfully Inserted');
            }else{
                return redirect()->back()->with('error','Something Error Found ! ');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page=Page::where('status',1)->pluck('name','link');
        $allData=SubMenu::leftJoin('menu','sub_menu.fk_menu_id','=','menu.id')->select('sub_menu.*','menu.name as menu_name')->where('fk_menu_id',$id)->orderBy('serial_num','ASC')->paginate(15);
        $menu=Menu::findOrFail($id);
        $max_serial=SubMenu::where('fk_menu_id',$id)->max('serial_num');
        $permissions = Permission::where('system',1)->pluck('name','slug');
        return view('backend.menu.subMenu',compact('allData','max_serial','page','menu','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $input = $request->all();
        $data=SubMenu::findOrFail($request->id);
        
        $validator = Validator::make($input, [
                    'name'    => 'required',
                    'url'          => 'required',
                    'icon' => 'mimes:jpeg,jpg,bmp,png'
                   // 'icon' => 'mimes:jpeg,jpg,bmp,png|dimensions:min_width=128,max_width=256'
                ]);
        
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

        try{
            $input['slug']=json_encode($request->slug);
            if ($request->hasFile('icon')){
                $input['icon']=MyHelper::photoUpload($request->file('icon'),'images/menu/sub-menu/icon/',32);
                $input['big_icon']=MyHelper::photoUpload($request->file('icon'),'images/menu/big-icon/',128);
                if (file_exists($data->icon)){ unlink($data->icon);  }
                if (file_exists($data->big_icon)){ unlink($data->big_icon);  }
            }
            $data->update($input);
                
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect()->back()->with('success','Successfully update');
            }else{
                return redirect()->back()->with('error','Something Error Found ! ');
            }
    } 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data=SubMenu::findOrFail($id);
       try{
            $data->delete();
            $bug=0;
           if (file_exists($data->icon)){ unlink($data->icon);  }
           if (file_exists($data->big_icon)){ unlink($data->big_icon);  }
            $error=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
            $error=$e->errorInfo[2];
        }
        if($bug==0){
       return redirect()->back()->with('success','Successfully Deleted!');
        }elseif($bug==1451){
       return redirect()->back()->with('error','This Data is Used anywhere ! ');

        }
        elseif($bug>0){
       return redirect()->back()->with('error','Some thing error found !');

        }
    }
}
