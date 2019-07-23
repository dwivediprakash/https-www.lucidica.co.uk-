var app = angular.module( 'css-app', [ 'ngRoute' ] );


// Routing
app.config(function( $routeProvider ) {
  $routeProvider
  .when('/', {
    templateUrl : 'http://www.lucidica.com/css-app/admin/templates/main.html'
  })
  .when('/prev', {
    templateUrl : 'http://www.lucidica.com/css-app/admin/templates/prev.html'
  })
  .when('/old', {
    templateUrl : 'http://www.lucidica.com/css-app/admin/templates/old.html'
  });
});


// Controller
app.controller( 'tableCtrl', function( $scope, $http ) {

  // Variables
	$scope.customerRecords = '';
  $scope.jobTitle = 'Name: Job Title';
  $scope.jobEngineer = 'Test Test';
  $scope.customerEmail = 'test@mail.com';
  $scope.customerCompany = 'Customer company';


  // Receive data
  $scope.outputData = function() {
    var data = $.param({
      week: window.location.hash.substr(2)
    });
    var config = {
      headers : {
        'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
      }
    }
    $http.post( 'http://www.lucidica.com/css-app/admin/backend/back-output.php', data, config )
    .then( function ( result ) {
      $scope.customerRecords = result.data;
    }, function ( error ) {
      console.log( error );
    });
  };
  $scope.outputData();


  // Delete table item
  $scope.removeItem = function( ID ) {
    var data = $.param({
      id: ID
    });
    var config = {
      headers : {
        'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
      }
    }
    $http.post( 'http://www.lucidica.com/css-app/admin/backend/back-remove-item.php', data, config )
    .then( function ( result ) {
      $scope.outputData();
    }, function ( error ) {
      console.log( error );
    });
  };


  // Add new item
  $scope.addItem = function() {
    if ( $scope.jobTitle.length && 
         $scope.jobEngineer.length && 
         $scope.customerEmail.length && 
         $scope.customerCompany.length ) {

      var data = $.param({
        jobTitle: $scope.jobTitle,
        jobEngineer: $scope.jobEngineer,
        customerEmail: $scope.customerEmail,
        customerCompany: $scope.customerCompany
      });
      var config = {
        headers : {
          'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
      }
      $http.post( 'http://www.lucidica.com/css-app/admin/backend/back-add-item.php', data, config )
      .then( function ( result ) {
          $scope.outputData();
          $scope.jobTitle = '';
          $scope.jobEngineer = '';
          $scope.customerEmail = '';
          $scope.customerCompany = '';
          console.log( result );
      }, function ( error ) {
        console.log( error );
      });
    }
  };


  // Add active class to nav button
  $scope.addActiveClass = function( url ) {
    if ( window.location.hash.substr(2) === url ) {
      angular.element($('.navbar-nav a').parent()).removeClass('active');
      angular.element($('.navbar-nav a[href="#/'+url+'"]').parent()).addClass('active');
    }
  };
  $scope.addActiveClass( window.location.hash.substr(2) );


  // Filter by date
  $scope.filteredWeek = false;
  $scope.filterWeek = function() {

    $scope.filteredWeek = true;
    if ( $scope.filteredWeek ) {
      $scope.filteredWeek = angular.element($('#week')).val().split( 'W' )[1];
    }
  };

});