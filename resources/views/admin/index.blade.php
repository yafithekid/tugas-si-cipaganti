@extends('layouts.master')
@section('content')
<b>Atur Jadwal</b>
<form class='form-inline'>
        
        <div class='form-group'>
            <label for='asal'>Asal</label>
            <select id='asal' class="form-control select  select-block mbl" style='border: 2px solid #bdc3c7;'>
              @foreach($list_kota_pool as $kota => $list_pool)
              <optgroup label="{{$kota}}">
                @foreach($list_pool as $pool)
                 <option value="{{$pool->pool_id}}">{{$pool->nama}}</option>
                @endforeach
              </optgroup>
              @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label for='asal'>Tujuan</label>
            <select id='asal' class="form-control select  select-block mbl" style='border: 2px solid #bdc3c7;'>
              @foreach($list_kota_pool as $kota => $list_pool)
              <optgroup label="{{$kota}}">
                @foreach($list_pool as $pool)
                 <option value="{{$pool->pool_id}}">{{$pool->nama}}</option>
                @endforeach
              </optgroup>
              @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label for='tujuan'>Hari</label>
            <select id='tujuan' class="form-control select  select-block mbl" style='border: 2px solid #bdc3c7;'>
                <option value="0">Senin</option>
                <option value="1">Selasa</option>
              </optgroup>
            </select>
        </div>
        <div class='form-group'>
            <label> </label>
            <button type='submit' class='btn btn-primary' style='margin-top:20px;'>Saring</button>
        </div>
</form>
        <table class='table' style='text-align:center;'>
            <tr>
                <th>
                    <center>Brkt</center>
                </th>
                <th>
                    <center>Tiba</center>
                </th>
                <th>
                   <center>Harga (Rp)</center>
                </th>
                <th>
                    <center>Rata2 penumpang</center>
                </th>
                <th>
                    <center>Aktif</center>
                </th>
                <th>
                    <center>Promo</center>
                </th>
                <th>
                    <center>Aksi</center>
                </th>
            </tr>
            <!--spawn data-->
            <tr>
                <td>
                    05.00
                </td>
                <td>
                    06.00
                </td>
                <td>
                    <input value='100000'/>
                </td>
                <td>
                    3<br/>
                    <a href='#'>Statistik</a>
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </td>
                <td>
                    <input type='checkbox' checked>
                </td>
                <td>
                    <input type='checkbox'>
                </td>
                <td>
                    <button type='submit' class='btn btn-primary'>Simpan</button>
                </td>
            </tr>
            <tr>
                <td>
                    05.00
                </td>
                <td>
                    06.00
                </td>
                <td>
                    <input value='80000'/>
                </td>
                <td>
                    6
                    <a href='#'>Statistik</a>
                </td>
                <td>
                    <input type='checkbox' checked>
                </td>
                <td>
                    <input type='checkbox' checked>
                </td>
                <td>
                    <button type='submit' class='btn btn-primary'>Simpan</button>
                </td>
            </tr>
            <tr>
                <td>
                    05.00
                </td>
                <td>
                    06.00
                </td>
                <td>
                    <input value='100000'/>
                </td>
                <td>
                    4
                    <a href='#'>Statistik</a>
                </td>
                <td>
                    <input type='checkbox' checked>
                </td>
                <td>
                    <input type='checkbox'>
                </td>
                <td>
                    <button type='submit' class='btn btn-primary'>Simpan</button>
                </td>
            </tr>
            <!--end of spawn data-->
        </table>
        
    </div>
</form>
@stop
@section('script')
@parent
<script type="text/javascript" src="{{asset('/canvasjs/js/canvasjs.min.js')}}"></script>
<script type="text/javascript">
$("select").select2({dropdownCssClass: 'dropdown-inverse'});
$(document).ready(function(){
    var chart = new CanvasJS.Chart("chartContainer",
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
            { x: new Date(2015,04,01), y: 4 },
            { x: new Date(2015,04,02), y: 5 },
            { x: new Date(2015,04,03), y: 6 },
            { x: new Date(2015,04,04), y: 3 },
            { x: new Date(2015,04,05), y: 2 },
            { x: new Date(2015,04,06), y: 2 },
            { x: new Date(2015,04,07), y: 1 },      
            ]
          }       
            
          ]
    });

    chart.render();
});
</script>
@stop