@extends('layouts.master')
@section('content') 
<form method='get' action='{{route('tiket')}}' id='tiket'>
    <div class='col-xs-3'>
        <b>Cari Jadwal</b>
        <div class='form-group'>
            <label for='asal'>Asal</label>
            <select name='asal' id='asal' class="form-control select  select-block mbl" style='border: 2px solid #bdc3c7;'>
              @foreach($list_kota_pool as $kota => $list_pool)
              <optgroup label="{{$kota}}">
                @foreach($list_pool as $pool)
                 <option value="{{$pool->pool_id}}" @if($asal == $pool->pool_id) selected @endif>{{$pool->nama}}</option>
                @endforeach
              </optgroup>
              @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label for='asal'>Tujuan</label>
            <div id='dropdown-tujuan'>
                @include('_list_tujuan',['list_tujuan_kota_pool'=>$list_tujuan_kota_pool,'tujuan'=>$tujuan])
            </div>
        </div>
        <div class='form-group'>
            <label for='tanggal'>Tanggal Keberangkatan</label>
            <input name='tanggal' id='tanggal' class='form-control' type='date' value='{{$tanggal}}'/>
        </div>
        <center>
            <button type='submit' class='btn btn-primary'>Cari</button>
        </center>
    </div>
    <div class='col-xs-9'>
        <table class='table' style='text-align:center;'>
            <tr>
                <th>
                    <center>Brkt</center>
                </th>
                <th>
                   <center> Harga per orang (Rp)</center>
                </th>
                <th>
                    <center> </center>
                </th>
            </tr>
            <!--spawn data-->
            @if ($list_jadwal == null)
                Silakan pilih jadwal
            @else

            @foreach($list_jadwal as $jadwal)
            <tr>
                <td>{{$jadwal->waktu}}</td>
                <td>{{$jadwal->harga}}</td>
                <td>
                    <button disabled type='submit' class='btn btn-attention'>Habis</button>
                </td>
            </tr>
            @endforeach
            @endif
            <!--end of spawn data-->
        </table>
        
    </div>
</form>
@stop
@section('script')
@parent
<script type="text/javascript">
$("select").select2({dropdownCssClass: 'dropdown-inverse'});
$("#asal").change(function(){
    var val = $("#asal").val();
    $.post('{{route("list_tujuan")}}',{"asal":val,"_token":"{{csrf_token()}}"},function(data){
        //console.log(data);
        $("#tujuan").html(data);
        $("select").select2({dropdownCssClass: 'dropdown-inverse'});
    });
});
</script>
@stop