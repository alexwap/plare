app.controller('AdminController', function($scope,$http){

  $scope.pools = [];

});


app.controller('UsuariosController', function(dataFactory,$scope,$http,apiUrl){
 
  $scope.data = [];
  $scope.libraryTemp = {};
  $scope.totalUsuariosTemp = {};

  $scope.totalUsuarios = 0;
  $scope.pageChanged = function(newPage) {
    getResultsPage(newPage);
  };

  getResultsPage(1);

    function getResultsPage(pageNumber) {
      if(! $.isEmptyObject($scope.libraryTemp)){
          dataFactory.httpRequest(apiUrl+'/list?search='+$scope.searchText+'&page='+pageNumber).then(function(data) {
            $scope.data = data.data;
            $scope.totalUsuarios = data.total;
          });
      }else{
        dataFactory.httpRequest(apiUrl+'/list?page='+pageNumber).then(function(data) {
          console.log(data);
          $scope.data = data.data;
          $scope.totalUsuarios = data.total;
        });
      }
  }








   
});