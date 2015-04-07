@extends('layouts.master')
@section('content')
<form>
    <div class='col-xs-3'>
        <b>Cari Jadwal</b>
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
            <label for='tanggal'>Tanggal Keberangkatan</label>
            <input id='tanggal' class='form-control' type='date'/>
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
                    <center>Tiba</center>
                </th>
                <th>
                   <center> Harga per orang</center>
                </th>
                <th>
                    <center> </center>
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
                    Rp100.000,00
                </td>
                <td>
                    <button disabled type='submit' class='btn btn-attention'>Habis</button>
                </td>
            </tr>
            <tr>
                <td>
                    06.00
                </td>
                <td>
                    07.00
                </td>
                <td>
                    Rp80.000,00<br/>
                     <span class='label label-warning'>Promo!</span>
                </td>
                <td>
                    <button type='submit' class='btn btn-attention'>Pesan</button>
                </td>
            </tr>
            <tr>
                <td>
                    07.00
                </td>
                <td>
                    08.00
                </td>
                <td>
                    Rp100.000,00
                </td>
                <td>
                    <button type='submit' class='btn btn-attention'>Pesan</button>
                </td>
            </tr>
            <!--end of spawn data-->
        </table>
        
    </div>
</form>
@stop
@section('script')
@parent
<script type="text/javascript">
$("select").select2({dropdownCssClass: 'dropdown-inverse'});
</script>
@stop