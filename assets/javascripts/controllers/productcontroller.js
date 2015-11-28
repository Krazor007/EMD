app.controller('ProductCtrl', function ($scope,$http) {  
	$scope.text = "This is the Products page";
	$scope.products = [];
	$scope.ordr = false;
	$scope.ordr_ab = false;
	$scope.ordr_cr = false;
	$scope.ordr_ud = false;
	$scope.alpha = "pname";
	$scope.createdat = "created_at";
	$scope.updatedat = "updated_at";
	$scope.parameter = "pname";
    $scope.imgabsolute = "/assets/img/";
    $scope.filtercontent = "";
    $scope.typefilter = [];
	$scope.getItems = function()
	{

        
            $scope.products = [{"pid":"1","pname":"Diclofenac Sodium/caffeine","pstrength":"50mg/30mg","ppacksize":"1x10tabs(1-strip) in monocarton ,10 monocarton in one outer box","pimgpath":"1.jpg","created_at":"2015-11-16 21:02:43","updated_at":"2015-11-21 21:22:10","type":"Tablets","status":"show"},{"pid":"2","pname":"Diarrhoea (Lapromide-HCL)","pstrength":"2mg","ppacksize":"1x10x10(1strip)","pimgpath":"2.jpg","created_at":"2015-11-16 21:02:44","updated_at":"2015-11-21 22:17:42","type":"Eye/Ear Drops","status":"show"},{"pid":"3","pname":"Sildenafil Citrate","pstrength":"100mg","ppacksize":"4-tabs (1-strip) ,10-strips =1-Roll","pimgpath":"3.jpg","created_at":"2015-11-16 21:02:46","updated_at":"2015-11-21 21:22:44","type":"Tablets","status":"show"},{"pid":"5","pname":"Tramadol-HCL","pstrength":"100mg/200mg","ppacksize":"100x10 (1-strip) ,10-strips =1-Roll","pimgpath":"5.jpg","created_at":"2015-11-16 21:02:55","updated_at":"2015-11-21 21:23:02","type":"Capsules","status":"show"},{"pid":"6","pname":"Nimesulide","pstrength":"100mg","ppacksize":"12 tablets =strip , 1(strip) x 20= Outercarton","pimgpath":"6.jpg","created_at":"2015-11-16 21:03:00","updated_at":"2015-11-21 21:22:36","type":"Tablets","status":"show"},{"pid":"7","pname":"test","pstrength":"lol1","ppacksize":"lol2","pimgpath":"7.jpg","created_at":"2015-11-21 15:04:33","updated_at":"2015-11-21 21:49:59","type":"Injectables","status":"show"},{"pid":"11","pname":"Giveanicename","pstrength":"12","ppacksize":"34","pimgpath":"8.jpg","created_at":"2015-11-21 15:43:53","updated_at":"2015-11-21 21:22:25","type":"Injectables","status":"show"}];

		   
	}

        $scope.getTypes = function()
    {
 
             $scope.typefilter = [{"tid":"1","type":"Injectables"},{"tid":"2","type":"Tablets"},{"tid":"3","type":"Eye\/Ear Drops"},{"tid":"4","type":"Capsules"},{"tid":"5","type":"Syrups"},{"tid":"6","type":"Veterinary Products"},{"tid":"7","type":"Washing Powder"}];
 
           
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

	$scope.getItems();
    $scope.getTypes();  
});
