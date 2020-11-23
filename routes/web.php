<?php

Route::middleware([])->group(function () {
    Route::get('/user-login', 'IndexController@login');
//Route::get('/login',function(){ return redirect('user-login');})->name('login');

    Auth::routes(['verify' => true, 'register' => true]);

    Route::get('/', 'TekblockController@index');

    Route::get('/events.html', 'frontend\ShowEventController@allActiveEvents');
    Route::get('/event/{url}', 'frontend\ShowEventController@eventDetails');
    Route::post('/event-application', 'frontend\ShowEventController@evenApplicant');


    Route::get('/about-us.html', 'frontend\AboutUsController@aboutCompany');

    Route::get('/contact-us.html', 'frontend\ContactUsController@contactWithCompany');
    Route::post('/user-feedback', 'frontend\ContactUsController@getUserFeedBack');

    Route::get('/courses.html', 'frontend\ShowCourseController@allActiveCourse');
    Route::get('/course/{courseName}', 'frontend\ShowCourseController@singleCourseDetails');

    Route::get('/latest-news.html', 'frontend\LatestNewsController@latestNewsList');

    Route::post('/subscribe', 'TekblockController@saveSubscriber');
    Route::resource('/demo-class', 'DemoClassController');

    Route::get('load-sub-category-data/{categoryId}', 'frontend\ShowCourseController@loadSubCategoryData');
});


Route::middleware(['auth','disablepreventback','admin'])->group(function () {
    Route::get('/logout','IndexController@logout');
    Route::get('/home', 'DashboadController@home');
    Route::get('/home/{slug}', 'DashboadController@subMenu');
    Route::get('/home/{slug}/{subslug}', 'DashboadController@subSubMenu');


    Route::resource('subscriber','SubscriptionController');//->middleware('permission:slider');
    Route::resource('event-register','EventBookedController');//->middleware('permission:slider');

    Route::resource('slider-admin','SliderController')->middleware('permission:slider');
    Route::resource('teachers','TeacherController')->middleware('permission:teacher');
    Route::resource('branches', 'BranchController')->middleware('permission:branches');
    Route::resource('courses', 'CourseController')->middleware('permission:courses');
    Route::resource('course-details', 'CourseDetailController')->middleware('permission:course-details');
    Route::get('sub-category-data/{categoryId}', 'CourseController@loadSubCategory')->middleware('permission:courses');
    Route::resource('subjects', 'SubjectController')->middleware('permission:subjects');

    Route::get('calendar', 'CalendarController@index');
    Route::get('calendar-modal/{id}', 'CalendarController@modalLoad');
    Route::resource('events', 'EventController')->middleware('permission:events');
    Route::resource('testimonial', 'TestimonialController')->middleware('permission:testimonial');

    Route::resource('category','CategoryController')->middleware('permission:category');
    Route::resource('sub-category','SubCategoryController')->middleware('permission:sub-category');

    //Notice
    Route::resource('notice-category','NoticecategoryController')->middleware('permission:notice');
    Route::resource('notice-admin','NoticeController')->middleware('permission:notice');


    Route::resource('all-users','UsersController')->middleware('permission:users');
    Route::resource('user-profile','ProfileController');
    Route::post('change-password',['as'=>'password','uses'=>'UsersController@password']);
    Route::get('change-password','UsersController@changePass')->middleware('permission:users');

    // acl
    Route::resource('acl-role', 'AclRolesController')->middleware('permission:acl');
    Route::resource('acl-permission', 'AclPermissionController')->middleware('role:system');
    Route::post('acl-permission-role', 'AclPermissionController@storeRole')->middleware('permission:acl');
    // menu
    Route::resource('menu','MenuController')->middleware('permission:menu');
    Route::resource('sub-menu','SubMenuController')->middleware('permission:menu');
    Route::resource('sub-sub-menu','SubSubMenuController')->middleware('permission:menu');
    Route::get('page-menu','MenuController@page')->middleware('permission:menu');
    Route::resource('pages','PagesController');
    Route::resource('primary-info','PrimaryInfoController')->middleware('permission:primary-info');
    Route::resource('social-icon','SocialIconController')->middleware('permission:primary-info');
});


//Route::get('register', function () {
//    return redirect('/');
//});
Route::get('email-template', function () {
    return view('vendor.notifications.email');
});

