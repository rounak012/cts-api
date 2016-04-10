public function api()
{
		try{

			
			$statusCode = 200;
			$users = division::with(['subdivision'=>function($query){
				return $query->with('categories')->get();
			}])->get();
	          


		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($users, $statusCode);
		}
	}
	