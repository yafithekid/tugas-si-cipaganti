
<!-- Modal! -->
<div class="modal fade" id="chart_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align: center">Statistik Penjualan</h4>
      </div>
      <div class="modal-body" id="chart" style="height: 400px; margin: auto; left: 5%">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Chart Grafik! -->
<script type="text/javascript">
$(document).ready(function(){
    $("#chart_modal").modal('show');
    var chart = new CanvasJS.Chart("chart",
    {
      /*title:{
        text: "Penumpang"
      },*/
      axisX:{
            valueFormatString: "DD-MMM"
        },
       data: [
          {
            type: "line",
            dataPoints: [

            <?php
                foreach($list_pesanan as $pesanan)
                {
                    $day = date('d',strtotime($pesanan->tanggal));
                    $month = date('m',strtotime($pesanan->tanggal));
                    $year = date('Y',strtotime($pesanan->tanggal));
            ?>

            { x: new Date({{$year}},{{$month - 1}},{{$day}}), y: {{$pesanan->jumlah}}},

            <?php
                }
            ?>
            ]
          }

          ]
    });

    chart.render();
});
</script>
