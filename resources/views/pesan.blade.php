@extends('layouts.master')
@section('content')
        <div class='col-md-6 col-md-offset-3'>
            <form action='{{route('konfirmasi.show')}}' method='post'>
                <input name='_token' type='hidden' value='{{csrf_token()}}' />
                <div class='form-group'>
                    Tiket dengan <b>{{$jadwal->poolAsal->nama}}</b> - <b>{{$jadwal->poolTujuan->nama}}</b><br/>
                    tanggal <b>{{$jadwal->tanggal}}</b> <b>{{$jadwal->waktu}}</b> 
                </div>
                <div class='form-group'>
                    <input name='jadwal_id' type='hidden' value='{{$jadwal->id}}'/>
                </div>
                <div class='form-group'>
                    <label for='name'>Nama Pemesan</label>
                    <input name='nama_pemesan' id='name' class='form-control'/>
                </div>
                <div class='form-group'>
                    <label for='phone'>No Telepon</label>
                    <input name='no_telepon' id='phone' class='form-control'/>
                </div>
                <div class='form-group'>
                    <label>Kursi</label>
                    <div id='seat-wrapper'>
                        <img src='img/vehicle.png'>
                        <div>
                            <button @if($kursi_terisi[1]) disabled @endif class='btn-seat @if($kursi_terisi[1]) btn-seat-disabled @endif' type='button' style='top:200px; left:173px;' rel='1'>1</button>

                            <button @if($kursi_terisi[2]) disabled @endif class='btn-seat @if($kursi_terisi[2]) btn-seat-disabled @endif' type='button' style='top:90px; left:255px;' rel='2' >2</button>
                            <button @if($kursi_terisi[3]) disabled @endif class='btn-seat @if($kursi_terisi[3]) btn-seat-disabled @endif' type='button' style='top:146px; left:255px;' rel='3'>3</button>

                            <button @if($kursi_terisi[4]) disabled @endif class='btn-seat @if($kursi_terisi[4]) btn-seat-disabled @endif' type='button' style='top:90px; left:345px;' rel='4'>4</button>
                            <button @if($kursi_terisi[5]) disabled @endif class='btn-seat @if($kursi_terisi[5]) btn-seat-disabled @endif' type='button' style='top:146px; left:345px;'  rel='5'>5</button>
                            <button @if($kursi_terisi[6]) disabled @endif class='btn-seat @if($kursi_terisi[6]) btn-seat-disabled @endif' type='button' style='top:200px; left:345px;' rel='6'>6</button>

                            <button @if($kursi_terisi[7]) disabled @endif class='btn-seat @if($kursi_terisi[7]) btn-seat-disabled @endif' type='button' style='top:90px; left:435px;' rel='7'>7</button>
                            <button @if($kursi_terisi[8]) disabled @endif class='btn-seat @if($kursi_terisi[8]) btn-seat-disabled @endif' type='button' style='top:146px; left:435px;' rel='8'>8</button>
                            <button @if($kursi_terisi[9]) disabled @endif class='btn-seat @if($kursi_terisi[9]) btn-seat-disabled @endif' type='button' style='top:200px; left:435px;' rel='9'>9</button>
                        </div>
                        Keterangan:
                        <input type='hidden' name='no_kursi' id='no_kursi'/>
                    </div>
                    <div id='seat-description'>
                        <button class='btn-seat btn-seat-disabled' type='button'> </button> Dipesan
                        <button class='btn-seat' type='button'> </button> Kosong
                    </div>

                </div>
                <div class='form-group'>
                    <center>
                        <button class='btn btn-success' type='submit'>Pesan</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
    @stop
    @section('script')
    @parent
        <script type="text/javascript">
        $("select").select2({dropdownCssClass: 'dropdown-inverse'});
        $(".btn-seat").click(function(){
            var val = $(this).attr("rel");
            $("#no_kursi").val(val);
            $(".btn-seat:not(.btn-seat-disabled)").attr('class','btn-seat');
            $(".btn-seat[rel="+val+"]").attr('class','btn-seat btn-seat-selected');
        });

        </script>
    @stop