@extends('layouts.master')
@section('content')
    <h4>Konfirmasi Pesanan Tiket</h4>
    
    
    <div class='col-md-8 col-md-offset-3'>
        <div class='col-md-6'>
            <div>
                <b>Tanggal Pergi</b>
            </div>
            <div>
                {{$jadwal->tanggal}}
            </div>
                
        </div>
        <div class='col-md-6'>
            <div>
                <b>Pukul</b>
            </div>
            <div>
                {{$jadwal->waktu}}
            </div>
        </div>
        <div class='col-md-12' style='margin:10px;'></div>
        <div class='col-md-6'>
            <div>
                <b>Asal</b>
            </div>
            <div>
                {{$jadwal->poolAsal->nama}}
            </div>
                
        </div>
        <div class='col-md-6'>
            <div>
                <b>Tujuan</b>
            </div>
            <div>
                {{$jadwal->poolTujuan->nama}}
            </div>
        </div>
        <div class='col-md-12' style='margin:10px;'></div>
        <div class='col-md-6'>
            <div>
                <b>Nama Pemesan</b>
            </div>
            <div>
                {{$pesanan->nama_pemesan}}
            </div>
                
        </div>
        <div class='col-md-6'>
            <div>
                <b>No Telpon</b>
            </div>
            <div>
                {{$pesanan->no_telepon}}
            </div>
        </div>
        <div class='col-md-12' style='margin:10px;'></div>
        <div class='col-md-6'>
            <div>
                <b>No kursi</b>
            </div>
            <div>
                {{$pesanan->no_kursi}}
            </div>
        </div>
        <div class='col-md-6'>
            <div>
                <b>Biaya</b>
            </div>
            <div>
                {{$jadwal->harga}} (Rp)
            </div>
        </div>
        <div>
            Pastikan data di atas benar. Setelah anda menekan tombol konfirmasi, SMS informasi pembayaran akan dikirimkan ke no. telepon anda.
        </div>
        <form method='post' action='{{route('konfirmasi.submit')}}'>
            <input name='_token' type='hidden' value='{{csrf_token()}}' >
            <input name='jadwal_id' type='hidden' value='{{$jadwal->id}}'>
            <input name='nama_pemesan' type='hidden' value='{{$pesanan->nama_pemesan}}'>
            <input name='no_telepon' type='hidden' value='{{$pesanan->no_telepon}}'>
            <input name='no_kursi' type='hidden' value='{{$pesanan->no_kursi}}'>
            <center><input type='submit' class='btn btn-success' value='Konfirmasi'></center>
        </form>
        <div class='col-md-12' style='margin:10px;'></div>
    </div>


@endsection