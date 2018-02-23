<div class="countdown">
  <h1>
    {{__('Countdown until we go to NIC')}}

    <sup data-tooltip>
      <i class="fa fa-question-circle"></i>

      <div class="tooltip">
        <b>{{__('NIC - Token Generation Event.')}}</b>
        <br>
        {{__('It is a synonym of the ICO. We use the NIC term because NIC tokens but not coins will be issued.')}}<br><a href="#faq">{{__('Learn more')}} &darr;</a>
      </div>
    </sup>
  </h1>

  <p>
    <i class="fa fa-calendar-check-o"></i>
    <a href="/docs/Ninance-NIC-Start.ics">{{__('Add event to calendar')}}</a>
    {{__('and get notified')}}
  </p>

  @include('shared/countdownBlock')
</div>
