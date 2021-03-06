@extends('layouts.master')
@section('content')
<b>Atur Jadwal</b>
<form class='form-inline' action="{{route('admin')}}" method="get">

        <div class='form-group'>
            <label for='asal'>Asal</label>
            <select name ='asal' id='asal' class="form-control select  select-block mbl" style='border: 2px solid #bdc3c7;'>
              <option value="0" @if($asal == null) selected  @endif>--- Silakan pilih pool asal ---</option>
              @foreach($list_kota_pool as $kota => $list_pool)
              <optgroup label="{{$kota}}">
                @foreach($list_pool as $pool)
                 <option value="{{$pool->pool_id}}" @if($asal == $pool->pool_id) selected @endif >{{$pool->nama}}</option>
                @endforeach
              </optgroup>
              @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label for='asal'>Tujuan</label>
            @include('_list_tujuan',compact('list_tujuan_pool_kota','tujuan'))
        </div>
        <div class='form-group'>
            <label for='tujuan'>Tanggal</label>
            <select id='tanggal' name="tanggal" class="form-control select  select-block mbl" style='border: 2px solid #bdc3c7;'>
                @foreach($list_tanggal as $jadwal)
                <option value="{{ $jadwal->tanggal }}" @if($jadwal->tanggal == $tanggal) selected @endif>{{ date('l, jS F Y',strtotime($jadwal->tanggal)) }}</option>
                @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label> </label>
            <button type='submit' id="saringan" class='btn btn-primary' style='margin-top:20px;'>Saring</button>
        </div>
        </form>
        <table class='table' style='text-align:center;'>
            <tr>
                <th>
                    <center>Brkt</center>
                </th>
                <th>
                   <center>Harga (Rp)</center>
                </th>
                <th>
                    <center>Jumlah Penumpang</center>
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
                @if($list_jadwal == null)
                    Silakan Pilih Jadwal
                @else
                @foreach($list_jadwal as $jadwal)
            <tr>
                <td id="berangkat">{{$jadwal->waktu}}</td>
                <td>
                    <input id="harga" type="number" value='{{$jadwal->harga}}'/>
                </td>
                <td>
                    <?php
                     $found = false;
                     foreach($list_spesific_pesanan as $pesanan)
                     {
                        if($pesanan->jadwal_id == $jadwal->id)
                        {
                            echo $pesanan->jumlah;
                            $found = true;
                        }
                     }
                     if(!$found)
                     {
                         echo '0';
                     }
                     ?>
                    <br/>
                    <a class="lihat_statistik" id="{{ $jadwal->id }}">Statistik</a>
                </td>
                <td>
                    <input type='checkbox' name='aktif' id="aktif" @if($jadwal->aktif == 1) checked @endif>
                </td>
                <td>
                    <input type='checkbox' name='promo' id="promo" @if($jadwal->promo == 1) checked @endif>
                </td>
                <td>
                    <button type='submit' id="{{$jadwal->id}}" name="simpanbutton" class='btn btn-primary'>Simpan</button>
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
<script type="text/javascript" src="{{asset('/canvasjs/js/canvasjs.min.js')}}"></script>
<script type="text/javascript">
$("select").select2({dropdownCssClass: 'dropdown-inverse'});

</script>

<script type="text/javascript">
$("select").select2({dropdownCssClass: 'dropdown-inverse'});
$("#asal").change(function(){
    var val = $("#asal").val();
    if(val == 0)
    {
        $("#saringan").attr("disabled",true);
    }
    else
    {
        $("#saringan").attr("disabled",false);
    }
    $.post('{{route("list_tujuan")}}',{"asal":val,"_token":"{{csrf_token()}}"},function(data){
        //console.log(data);
        $("#tujuan").html(data);
        $("select").select2({dropdownCssClass: 'dropdown-inverse'});
    });
});

$("[name=simpanbutton]").click(function(){
    var id = $(this).attr('id');
    var harga = $(this).closest("tr").find("#harga").val();
    var promo = $(this).closest("tr").find("#promo").is(':checked')
    var aktif = $(this).closest("tr").find("#aktif").is(':checked');
    $.post('{{route("updateData")}}',{"id":id,"harga":harga,"promo":promo,"aktif":aktif,"_token":"{{ csrf_token() }}"},function(data){
        //$("#debug").html(data);
        alert('Data berhasil disimpan');
    });
})

$(".lihat_statistik").click(function(){
    var asal = $("#asal").val();
    var tujuan = $("#tujuan").val();
    var waktu = $(this).closest('tr').find('#berangkat').html();
    var tanggal = $('#tanggal').val();

    $.post('{{ route('getDataStatistic') }}', {"_token":"{{csrf_token()}}", "asal":asal, "tujuan":tujuan, "waktu":waktu, "tanggal":tanggal},function(data){
        $("#chart_div").html(data);
    });
})

$(document).ready(function(){
    var asal = '{{$asal}}';
    if(asal === null)
    {
        $("#saringan").attr("disabled",true);
    }
    
})

</script>

<div id="debug">

</div>

<div id="chart_div">

</div>

@stop