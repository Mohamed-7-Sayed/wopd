@extends('layouts.designers_style')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-left">
            <!-- Accordion -->
            <div class="col-md-8 faqs-accordion">
                <div class="accordion">
                    <a href="{{ url('/' . $page='create') }}"  class="item">
                        <div class="title">
                            <h6>Do you offer photography work abroad?</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="section-padding">
    <table class="table">
        <thead style="background-color: #000" class="thead-dark">
          <tr style="color: #ffffff">
            <th scope="col" >#</th>
            <th scope="col">Buyer's Name</th>
            <th scope="col">Image</th>
            <th scope="col">Payment Image</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($procurements as $procurement)
          <tr>
            <th scope="row">1</th>
            <td>@if ($procurement->Created_by)
{{$procurement->Users->name}}
            @endif</td>
            <td><img style="width: 200px" src="{{ asset('imgs/' . $procurement->image) }}" class="img-fluid mx-auto d-block"  alt=""></td>
            <td><img style="width: 200px" src="{{ asset('imgs/' . $procurement->Creates->image) }}" class="img-fluid mx-auto d-block"  alt=""></td>
            <td>
                @if (!$procurement->Status())
                    <form action="{{route('procurement.status', $procurement->id)}}" method="post">
                    @csrf
                        <button class="btn btn-success" type="submit">Active</button>
                    </form>
                 @else
                        @if ($procurement->status == 'active')
                            Actived
                        @endif
                        @if ($procurement->status == 'inactive')
                            Inactive
                        @endif
                @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</section>
@endsection
