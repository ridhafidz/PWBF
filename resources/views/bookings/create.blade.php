
<div class="container mt-5">
    <h2 class="mb-4">Buat Booking Baru</h2>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <!-- User -->
        <div class="form-group mb-3">
            <label for="user_id">Pilih User</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">-- Pilih User --</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Lapangan -->
        <div class="form-group mb-3">
            <label for="lapangan_id">Pilih Lapangan</label>
            <select name="lapangan_id" id="lapangan_id" class="form-control" required>
                <option value="">-- Pilih Lapangan --</option>
                @foreach ($lapangans as $lapangan)
                    <option value="{{ $lapangan->id }}">{{ $lapangan->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Booking Date -->
        <div class="form-group mb-3">
            <label for="booking_date">Tanggal Booking</label>
            <input type="date" name="booking_date" id="booking_date" class="form-control" required>
        </div>

        <!-- Start Time -->
        <div class="form-group mb-3">
            <label for="start_time">Waktu Mulai</label>
            <input type="time" name="start_time" id="start_time" class="form-control" required>
        </div>

        <!-- End Time -->
        <div class="form-group mb-3">
            <label for="end_time">Waktu Selesai</label>
            <input type="time" name="end_time" id="end_time" class="form-control" required>
        </div>

        <!-- Status -->
        <div class="form-group mb-3">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <!-- Payment ID -->
        <div class="form-group mb-3">
            <label for="payment_id">Payment ID (Optional)</label>
            <input type="number" name="payment_id" id="payment_id" class="form-control">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Simpan Booking</button>
    </form>
</div>

