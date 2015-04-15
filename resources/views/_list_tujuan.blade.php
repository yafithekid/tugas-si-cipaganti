<select name='tujuan' id='tujuan' class="form-control select  select-block mbl" style='border: 2px solid #bdc3c7;'>
  @foreach($list_tujuan_kota_pool as $kota => $list_pool)
  <optgroup label="{{$kota}}">
    @foreach($list_pool as $pool)
     <option value="{{$pool->pool_id}}" @if($tujuan == $pool->pool_id) selected @endif>{{$pool->nama}}</option>
    @endforeach
  </optgroup>
  @endforeach
</select>