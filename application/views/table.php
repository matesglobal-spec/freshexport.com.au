
<div class="container">
    <div class="main" ng-app="mainApp" ng-controller="maiappcntnCnt">
        <table class="table table-bordered" ng-repeat="i in data">
            <tr>
                <th>{{x.title}}</th>
                <th>Email</th>
                <th>Address</th>
            </tr>

            <tr>
                <td>Razon</td>
                <td>Razon@gmail.com</td>
                <td>Dhaka</td>
            </tr>
        </table>
    </div>
</div>


<script>
var app = angular.module("mainApp",[]);

    app.controller("appcnt",function($scope,$http){
        
        $http.get("<?=base_url()?>home/get_bidding_data").success(function(data){
            $scope.bidding_data = data;
        });
        
    })
</script>
</script>