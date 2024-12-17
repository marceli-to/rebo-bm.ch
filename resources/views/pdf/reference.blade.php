@include('pdf.partials.header')
<div class="page-visual">
  <img src="{{ env('APP_URL') }}/img/cache/visual/{{ basename($data->hero)}}" width="100" style="display: block; width: 173mm; height: auto">
  <div class="page-visual__pattern">
    <img src="{{ env('APP_URL') }}/img/pattern.png" width="100" style="display: block; width: 30mm; height: 74mm;">
  </div>
</div>
<div class="page-title">
  <h1>{{ $data->title }}</h1>
  <h2>{{ $data->subtitle }}</h2>
</div>
<div class="page-content">
  <table>
    <td style="width: 55mm; padding-right: 4mm">
      @if ($data->object)
        <h3>Objekt</h3>
        <p>{{ $data->object }}</p>
      @endif
      @if ($data->client)
        <h3>Bauherr</h3>
        <p>{{ $data->client }}</p>
      @endif
      @if ($data->commissioner)
        <h3>Auftraggeber</h3>
        <p>{{ $data->commissioner }}</p>
      @endif
      @if ($data->volume)
        <h3>Bauvolumen</h3>
        <p>{!! nl2br($data->volume) !!}</p>
      @endif
      @if ($data->cost)
        <h3>Kosten</h3>
        <p>{{ $data->cost }}</p>
      @endif
      @if ($data->periode)
        <h3>Bauzeit</h3>
        <p>{{ $data->periode }}</p>
      @endif
      @if ($data->job)
        <h3>Auftrag</h3>
        <p>{!! nl2br($data->job) !!}</p>
      @endif
    </td>
    <td style="width: 114mm;">
      @if ($data->gallery)
        @foreach($data->gallery as $row)
          @if ($loop->iteration <= 3)
            @if ($row->images && $row->images->count() == 2)
              <table style="margin-bottom: 4mm">
                <tr>
                  <td>
                    <img src="{{ env('APP_URL') }}/img/cache/landscape/{{ basename($row->images[0]->path)}}" width="100" style="display: block; width: 55mm; height: auto">  
                  </td>
                  <td style="width: 4mm"></td>
                  <td>
                    <img src="{{ env('APP_URL') }}/img/cache/landscape/{{ basename($row->images[1]->path)}}" width="100" style="display: block; width: 55mm; height: auto">
                  </td>
                </tr>
              </table>
            @endif
            @if ($row->images && $row->images->count() == 3)
              <table style="margin-bottom: 4mm">
                <tr>
                  <td>
                    <img src="{{ env('APP_URL') }}/img/cache/portrait/{{ basename($row->images[0]->path)}}" width="100" style="display: block; width: 35.333mm; height: auto">  
                  </td>
                  <td style="width: 4mm"></td>
                  <td>
                    <img src="{{ env('APP_URL') }}/img/cache/portrait/{{ basename($row->images[1]->path)}}" width="100" style="display: block; width: 35.333mm; height: auto">
                  </td>
                  <td style="width: 4mm"></td>
                  <td>
                    <img src="{{ env('APP_URL') }}/img/cache/portrait/{{ basename($row->images[2]->path)}}" width="100" style="display: block; width: 35.333mm; height: auto">
                  </td>
                </tr>
              </table>
            @endif
          @endif
        @endforeach
      @endif
    </td>
  </table>
</div>
@include('pdf.partials.footer')