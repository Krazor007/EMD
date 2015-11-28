app.controller('DelCtrl', function ($scope,$http,$route) {   
	$scope.text = "This is the delete page";
	$scope.products = [];
    $scope.ptypes = [];
    $scope.stat_array = [{"status":"show"},{"status":"hide"}];
	$scope.ordr = false;
	$scope.ordr_ab = false;
	$scope.ordr_cr = false;
	$scope.ordr_ud = false;
	$scope.alpha = "pname";
	$scope.createdat = "created_at";
	$scope.updatedat = "updated_at";
	$scope.parameter = "pname";
    $scope.imgabsolute = "../../assets/img/";
    $scope.pr_name = "init_name";
    $scope.pr_strength = "init_strength";
    $scope.pr_id = "init_id";
    $scope.pr_packsize = "init_packsize";
    $scope.pr_imgname = "init_imgname";
    $scope.pr_ptype = "init_ptype";
    $scope.pstatus = "init_status";
    $scope.typefilter = [];
    $scope.filtercontent = "";
    $scope.delcount = 0;
    $scope.delitems = [];
	$scope.getItems = function()
	{
			 $http.get('http://localhost/php/admin/getItemsAdmin.php').
        		success(function(data) {
            // here the data from the api is assigned to a variable named products
            $scope.products = data;

        });
		   
	}
    $scope.getTypes = function()
    {
             $http.get('http://localhost/php/admin/getTypes.php').
                success(function(data) {
            // here the data from the api is assigned to a variable named ptypes n typefilter
            $scope.ptypes = data;
             $scope.typefilter = data;
        });
           
    }

	$scope.setSort_ab = function(){
         
         if($scope.ordr_ab == false)
         {
         	$scope.ordr_ab = true;
         	$scope.ordr = true;
         	console.log("ab_true");
         }
         else
         {
         	$scope.ordr_ab = false;
         	$scope.ordr = false;
         	console.log("ab_false");
         }

         $scope.parameter = $scope.alpha;
    };

	$scope.setSort_cr = function(){
         
         if($scope.ordr_cr == false)
         {
         	$scope.ordr_cr = true;
         	$scope.ordr = true;
         	console.log("cr_true");
         }
         else
         {
         	$scope.ordr_cr = false;
         	$scope.ordr = false;
         	console.log("cr_false");
         }

         $scope.parameter = $scope.createdat;
    };
	$scope.setSort_ud = function(){
         
         if($scope.ordr_ud == false)
         {
         	$scope.ordr_ud = true;
         	$scope.ordr = true;
         	console.log("ud_true");
         }
         else
         {
         	$scope.ordr_ud = false;
         	$scope.ordr = false;
         	console.log("ud_false");
         }

         $scope.parameter = $scope.updatedat;
    };
    $scope.setValues = function(item){
    $scope.pr_name = item.pname;
    $scope.pr_strength = item.pstrength;
    $scope.pr_id = item.pid;
    $scope.pr_packsize = item.ppacksize;
    $scope.pr_imgname = item.pimgpath;
    $scope.pr_ptype = item.type;
    $scope.pr_status = item.status;

    };

    $scope.delete = function(){

        if(!$scope.delcount >0)
        {
            alert("You have not selected any items to delete !");
        }
        else
        {
            var r =confirm("You are going to delete "+$scope.delcount+" item(s) permanently, proceed?");
            if(r == true)
            {
            var jsonString = JSON.stringify($scope.delitems);
               $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: {'content':jsonString}, 
                    cache: false,

                    success: function(){
                        $route.reload();
                    }
                });
            }
            else
            {

            }

        }
    };

    $scope.toggleSelect = function($event,item){

        if($scope.delitems.indexOf(item) == -1)
        {
        $scope.delitems.push(item);
        $scope.delcount = $scope.delitems.length;
        item.selected = true;
        
        }
        else
        {
        $scope.delitems.splice($scope.delitems.indexOf(item),1);
        $scope.delcount = $scope.delitems.length;
        item.selected = false;
        }


    };

	$scope.getItems();
    $scope.getTypes();
 
});