<table border="1">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking['first_name'] }}</td>
                <td>{{ $booking['last_name'] }}</td>
                <td>{{ $booking['email'] }}</td>
                <td>{{ $booking['mobile'] }}</td>
                <td style="display:flex">
                    <a href="">Edit</a>
                    <form action="" method="post">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
