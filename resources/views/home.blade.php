<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>

    <div class="container">

      <h1>
        {{ $name }} {{ $lastname }}
      </h1>

      @if (count($wins) > 0)

        <h3>
          Wins:
        </h3>

        <ul>

          @foreach ($wins as $win)

            @if ($loop->first)
              <li>Prima Vittoria: {{ $win }}</li>
              
            @elseif ($loop->last)
              <li>Ultima Vittoria: {{ $win }}</li>

            @else
              <li>{{ $win }}</li>

            @endif

          @endforeach 

        </ul>
      
      @else

        <h3>
          Still no wins.
        </h3>

      @endif
  
    </div>

  </body>

</html>