@extends('layouts.app')

@section('content')
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <input type="text" name="gender" placeholder="Gender">
        <input type="date" name="date_of_birth" placeholder="Date of Birth">
        <input type="text" name="state" placeholder="State">
        <input type="text" name="country" placeholder="Country">
        <input type="file" name="profile_photo">
        <select name="role">
            <option value="user">User</option>
            <option value="chef">Chef</option>
        </select>
        <button type="submit">Register</button>
    </form>
@endsection
