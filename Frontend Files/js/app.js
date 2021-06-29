$(document).ready(function(){
    $.ajax({
        url: "http://localhost/cricpedia/data.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var team = [];
            var Ratings = [];
            for(var i in data)
            {
                team.push(data[i].CountryName);
                Ratings.push(data[i].Ratings);
            }
            var chartdata = {
                labels: team,
                datasets: [
                    {
                        label : 'Team Ratings',
                        backgroundColor: 'rgba(0, 0, 255, 0.4)',
                        borderColor: 'rgba(0, 0, 0, 1)',
                        hoverBackgroundColor: 'rgba(0, 0, 255, 1)',
                        hoverBorderColor: 'rgba(200,200,200,1)',
                        data : Ratings
                    }
                ]
            };
            var ctx = $("#mycanvas");
            var barGraph = new Chart(ctx,{
                type: 'bar',
                data: chartdata
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});