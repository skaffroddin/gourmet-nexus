<form action="{{ route('otp.verify', $id) }}" method="POST">
    @csrf
    <input type="text" name="otp" placeholder="Enter OTP" required>
    <button type="submit">Verify OTP</button>
</form>
