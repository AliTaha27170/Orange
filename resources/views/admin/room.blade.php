@extends('voyager::master')

@section('content')
<style>
    .a{{ $id }}{
        background-color: #ffc1070f;
    }
</style>

<div>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">صاحب الحجز </th>
                <th scope="col">التاريخ </th>
                <th scope="col">وقت البدء </th>
                <th scope="col">مدة الحجز </th>
                <th scope="col">التفاصيل </th>
                <th scope="col">إلغاء الحجز  </th>
              </tr>
        </thead>
        <tbody>
            @foreach ($inf as $item)
            <tr>
                <td data-label="Account"><a href="route('voyager.users.show',$item->user->id)">{{  $item->user->name }}</a></td>
                <td data-label="Due Date">{{ $item->date }}</td>
                <td data-label="Amount">
                  @if ( $item->start_time =="08:00:00" )
                  {{ "8 صباحاً" }}
                  @elseif ( $item->start_time =="09:00:00" )
                  {{ "9 صباحاً" }}
                  @elseif ( $item->start_time =="10:00:00" )
                  {{ "10 صباحاً" }}
                  @elseif ( $item->start_time =="11:00:00" )
                  {{ "11 صباحاً" }}
                  @elseif ( $item->start_time =="12:00:00" )
                  {{ "12 مساءً" }}
                  @elseif ( $item->start_time =="13:00:00" )
                  {{ "1 مساءً" }}
                  @elseif ( $item->start_time =="14:00:00" )
                  {{ "2 مساءً" }}
                  @elseif ( $item->start_time =="15:00:00" )
                  {{ "3 مساءً " }}
                  @elseif ( $item->start_time =="16:00:00" )
                  {{ "4 مساءً " }}
                  @elseif ( $item->start_time =="17:00:00" )
                  {{ "5 مساءً" }}
                  @elseif ( $item->start_time =="18:00:00" )
                  {{ "6 مساءً" }}
                  @elseif ( $item->start_time =="19:00:00" )
                  {{ "7 مساءً" }}
                  @elseif ( $item->start_time =="20:00:00" )
                  {{ "8 مساءً" }}
                  @elseif ( $item->start_time =="21:00:00" )
                  {{ "9 مساءً" }}
                  @elseif ( $item->start_time =="22:00:00" )
                  {{ "10 مساءً" }}

                  @endif
                </td>
                <td data-label="Period">
                  @if ($item->Duration ==1)
                      ساعة واحدة
                  @elseif($item->Duration ==6)
                    6 ساعات
                  @elseif($item->Duration ==10)
                    10 ساعات
                    @elseif($item->Duration ==14)
                    يوم كامل
                    @elseif($item->Duration ==0)
                    شهر كامل
                  @endif

                </td>
                <td data-label="Period">{{ $item->description }}</td>
                <form method="get" action="{{ route("delete",$item->id) }}">
                  @csrf
                <td data-label="Period"><input type="submit" value="إلغاء" onclick="return confirm('هل أنت متأكد من رغبتك في الغاء هذا الحجز ؟')"></td>
                </form>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection
