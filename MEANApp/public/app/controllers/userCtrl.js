angular.module('userControllers',[])

.controller('regCtrl',function($http){
    this.regUser = function(regData) {
     // console.log('form submitted');
      //console.log(this.regData);
      $http.post('/api/users',this.regData).then(function(data){
          console.log(data);
      });
      // /api/users is the route for the backend to which data is being sent
    };
});


/*.config(function(){
console.log('Testing new module');
});*/