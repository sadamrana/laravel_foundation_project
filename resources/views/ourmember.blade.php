@extends('layouts.app')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Members</h2>
          <ol>
            <li><a href="/project/public/">Home</a></li>
            <li>Our Members</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- table content start here -->

    <div class="container">

    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin: 10px;
        box-sizing: border-box;
      }
      
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      
      tr:nth-child(even) {
        background-color: #dddddd;
      }
      h1{
        padding: 10px;
      }
      </style>
      
      <h1>Detail of the members of Green Skills Foundation</h1>
      
      
      <table class="table table-straped">
        
        <tr>
          <th>Sr. No.</th>
          <th>Name & Father's Name</th>
          <th>Adress </th>
          <th>Designation</th>
        </tr>
        
        <tr>
          <td>01</td>
          <td>Mian Ahmad Waleed</td>
          <td>Sahiwal</td>
          <td>Chairman & Founder</td>
        </tr>
        <tr>
          <td>02</td>
          <td>Rizwan Hussain</td>
          <td>Sahiwal</td>
          <td>Vice Chairman</td>
        </tr>
        <tr>
          <td>03</td>
          <td>Muhammad Hussain Gaffar</td>
          <td>Sadiq Abad</td>
          <td>President</td>
        </tr>
        <tr>
          <td>04</td>
          <td>Mian Ahmad Ramiz</td>
          <td>Sahiwal </td>
          <td>Vice President</td>
        </tr>
        <tr>
          <td>05</td>
          <td>Nazia Khan</td>
          <td>Sahiwal</td>
          <td>General Secretary</td>
        </tr>
        <tr>
          <td>06</td>
          <td>Muhammad Usman</td>
          <td>Sahiwal</td>
          <td>Joint Secretary</td>
        </tr>
        <tr>
          <td>07</td>
          <td>Farah Manzoor</td>
          <td>Sahiwal</td>
          <td>Finance Secretary</td>
        </tr>
        <tr>
          <td>08</td>
          <td>Mian Ali ibn e Sabar</td>
          <td>Sahiwal</td>
          <td>Project CVPE Chairman</td>
        </tr>
        
        <tr>
          <td>09</td>
          <td>Ijaz Ahmad</td>
          <td>Lords Group  of Technical Institute
            Depalpur</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Shabbir Hussain</td>
          <td>National Skills Institute Chichawatni</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>11</td>
          <td>Muhammad Irfan Aftab</td>
          <td>Multan</td>
          <td>Member</td>
        </tr>
      </table>

    </div>
@endsection
