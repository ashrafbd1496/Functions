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
		
		
		or like below- 
		
		
		 public function store(Request $request)
			{
				if ($request->hasFile('photo')){

					$img = $request->file('photo');
					$unique_name = md5(time().rand()).'.'. $img->getClientOriginalExtension();
					$img -> move(public_path('media/students'), $unique_name);
				}


			  Student::create([

				  'photo'   =>$unique_name,

			  ]);

    }