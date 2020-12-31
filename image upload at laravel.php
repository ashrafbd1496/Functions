/**
    	 *Image Upload system
    	 */

    	if ($value ->hasFile('photo')){

            $image = $value->file('photo');
            $photo_name = md5(time().rand()) .'.'. $image->getClientOriginalExtension();
            $image ->move(public_path('media/students/'), $photo_name);

        }else{
    	    $photo_name = '';
        }