var app=angular.module("myApp",[]);
app.controller('myCtrl',function($scope,$http){
  $scope.countryList = ["Téléphone","Tablette","Portable","Samsung","Sony","Apple","LG","oppo","Condor","Bébé","Maison et jardin","Allimentation","Voitures","Motos","Electromenager",
  "Informatique","Jeux et Consoles","Livers","Mode homme","Mode femme","Sports","Jouets","Cuisine et maison",
  "Vetements","Jeux vidéo","Game vidéo","Accessoires","Chaussures","Playtation","Playtation 3","Playtation 4 pro","Xbox","Nintendo","Xbox one","Manette",
  "Nintendo switch","pc gamer","mac book","mac book pro","mac book air","hp","asus","lenovo","Dell","acer","Nike aire","Jordan","Lacoste","adidas"];
  $scope.complete=function(string){

    var output=[];
    angular.forEach($scope.countryList,function(country){
      if(country.toLowerCase().indexOf(string.toLowerCase())>=0){
        output.push(country);
      }
    });
    $scope.filterCountry=output;
  }
  $scope.fillTextbox=function(string){
    $scope.country=string;
    $scope.filterCountry=null;
  }
});
