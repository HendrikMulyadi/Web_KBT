<x-layouts.app>
<div class="table-responsive m-4">
            <table class="table table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Mobil</th>
                        <th>Nomor HP</th>
                        <th>Alamat</th>
                        <th>Tanggal Sewa</th>
                        <th>Lama Sewa</th>
                        <th>Total Harga</th>
                        <th>Pesan</th>
                        <th>Status</th>
                    </tr>
                </thead>
    <tbody>
    @forelse ($forms as $index => $form)
        <tr>
            <td class="text-center">{{ $index + 1 }}</td>
            <td>{{ $form->name }}</td>
            <td>{{ $form->mobil->nama ?? '-' }}</td>
            <td>{{ $form->phone }}</td>
            <td>{{ $form->alamat }}</td>
            <td>{{ \Carbon\Carbon::parse($form->waktu)->format('d M Y') }}</td>
            <td class="text-center">{{ $form->lama_sewa }} hari</td>
            <td>Rp{{ number_format($form->total, 0, ',', '.') }}</td>
            <td>
                {{ $form->pesan ?? '-' }}
                @if($form->status != 'selesai')
                    <form action="{{ route('pesanan.selesai', $form->id) }}" method="POST" class="mt-2">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success btn-sm">Selesai</button>
                    </form>
                @else
                    <span class="badge bg-success">Selesai</span>
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="9" class="text-center">Belum ada pemesanan.</td>
        </tr>
    @endforelse
      </tbody>
    </table>
</div>
</x-layouts.app>
