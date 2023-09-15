<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- {{dd($elections)}} --}}
<script>
// console.log("sasdf");


var elections = @json($elections);

var labels = Object.keys(elections);
var data = Object.values(elections);
// console.log(data);





  const ctx = document.getElementById('myChart');
  

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      
  labels: labels,

  datasets: [{
    label: 'Category Datas',
    data: data,
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
}
  });
</script>
