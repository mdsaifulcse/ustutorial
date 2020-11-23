<?php

// SMS
    Route::get('/single-sms','SmsController@manuallySms')->middleware('permission:sms');
    Route::post('/single-sms','SmsController@manuallySmsSend')->middleware('permission:sms');
    Route::get('/bulk-sms','SmsController@bulkSms')->middleware('permission:sms');
    Route::post('/bulk-sms','SmsController@bulkSmsSend')->middleware('permission:sms');
    Route::get('/custom-sms','SmsController@customSms')->middleware('permission:sms');
    Route::get('sub-course-load', 'SmsController@subCourseLoad')->middleware('permission:sms');
    Route::get('/student-load','SmsController@studentLoad')->middleware('permission:sms');
    Route::post('/custom-sms','SmsController@customSmsSend')->middleware('permission:sms');

    //SMS Log
    Route::get('/sms-log','SmsController@smsLog')->middleware('permission:sms-log');
    Route::get('/sms-log/{id}','SmsController@smsLogSingle')->middleware('permission:sms-log');
    Route::get('/sms-log-all','SmsController@smsLogAll')->middleware('permission:sms-log');