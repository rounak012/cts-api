try{

			
			$statusCode = 200;
			$users = division::with('subdivision')->get();
			foreach($users as $user){
				$user->load('subdivision');
				
			}
	          