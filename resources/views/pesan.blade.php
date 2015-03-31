@extends('layouts.master')
@section('content')
        <div class='col-xs-6 col-xs-offset-2'>
            <form>
                <div class='form-group'>
                    Tiket dengan <b>Pasteur</b> - <b>Slipi</b> pada tanggal <b>4 April 2015</b> <b>18.00</b> 
                </div>
                <div class='form-group'>
                    <label for='name'>Nama Pemesan</label>
                    <input id='name' class='form-control'/>
                </div>
                <div class='form-group'>
                    <label for='phone'>No Telepon</label>
                    <input id='phone' class='form-control'/>
                </div>
                <div class='form-group'>
                    <label>Kursi</label>
                    <div id='seat-wrapper'>
                        <img src='img/vehicle.png'>
                        <div>
                            <button class='btn-seat' type='button' style='top:200px; left:173px;'>1</button>

                            <button class='btn-seat btn-seat-disabled' type='button' style='top:146px; left:255px;'>2</button>
                            <button class='btn-seat disabled' type='button' style='top:200px; left:255px;'>3</button>

                            <button class='btn-seat' type='button' style='top:90px; left:345px;'>4</button>
                            <button class='btn-seat' type='button' style='top:146px; left:345px;'>5</button>
                            <button class='btn-seat' type='button' style='top:200px; left:345px;'>6</button>

                            <button class='btn-seat' type='button' style='top:90px; left:435px;'>7</button>
                            <button class='btn-seat' type='button' style='top:146px; left:435px;'>8</button>
                            <button class='btn-seat' type='button' style='top:200px; left:435px;'>9</button>
                        </div>
                        Keterangan:
                        
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
    </script>
    @stop