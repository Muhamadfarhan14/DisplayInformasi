@include('dashboard.partials.title')
@include('dashboard.partials.sidebar')
@include('dashboard.partials.navbar')

<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">RUNNING TEXT</h4>


                        <div class="form-group mb-0">



                        </div>

                    </form>
                </div>
                <div class="card-body">
                    <div class="running-text-container">
                        @foreach ($runningtext as $item_rt)
                            <div class="running-text">
                                <marquee>{{ $item_rt->RT }}</marquee>
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ route('updateRt', ['id' => $runningtext[0]->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="row">
                                <div class="form-group">
                                    <label for="runningtext"></label>
                                    <textarea class="form-control" id="runningText" name="RT" rows="5">{{ $runningtext[0]->RT }}</textarea>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="badge badge-warning custom-badge">Perbaharui Running Text</button>
                                </div>
                            </div>
                        </div>
                    </form>


                    <style>
                        .custom-badge {
                        font-size: 12px; /* Atur ukuran teks sesuai kebutuhan */
                        color: white;
                        padding: 10px 15px; /* Atur padding sesuai kebutuhan */
                        }
                        .form-control {
                        width: 1010px; /* Sesuaikan lebar input form */
                        margin-right: 10px; /* Sesuaikan jarak antara input dan tombol */
                        }

                    </style>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- CSS RUNNING TEXT -->
<style>
    .running-text-container {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        border: 1px solid #ccc;
        height: 60px; /* Sesuaikan tinggi running text */
        display: flex; /* Menggunakan flexbox untuk posisi tengah */
        align-items: center; /* Posisikan teks di tengah secara vertikal */
    }
</style>
@include('dashboard.partials.corejs')
