@extends('shared/layout')

@section('content')
  <section class="topblock topblock-ico">
    <div class="topblock_bg">
      <div class="topblock_bg_inner"></div>
    </div>

    @component('shared/header')
      @slot('mobile')
        <li><a href="/">{{__('Product')}}</a></li>
		<li><a href="#token-participate">{{__('Participate')}}</a></li>
        <li><a href="#token-distribution">{{__('Token Distribution')}}</a></li>
        <li><a href="#join-crowdsale">{{__('How to Join')}}</a></li>
        <li><a href="#documentation">{{__('Docs')}}</a></li>
        <li><a href="#faq">{{__('FAQ')}}</a></li>
      @endslot

      <nav class="nav js-scroll-nav" role="navigation">
        <li><a href="/">{{__('Product')}}</a></li>
		<li><a href="#token-participate">{{__('Participate')}}</a></li>
        <li><a href="#token-distribution">{{__('Token Distribution')}}</a></li>
        <li><a href="#join-crowdsale">{{__('How to Join')}}</a></li>
        <li><a href="#documentation">{{__('Docs')}}</a></li>
        <li><a href="#faq">{{__('FAQ')}}</a></li>
      </nav>

      <div class="header_social">
        <a href="https://www.facebook.com/Ninanceex/" title="Facebook" class="link facebook" target="_blank"><i class="fa fa-facebook-square"></i></a>
        <a href="https://twitter.com/Ninanceex" class="link twitter" title="Twitter" target="_blank"><i class="fa fa-twitter-square"></i></a>
        <a href="https://t.me/Ninance" class="link telegram" title="Telegram" target="_blank"><i class="fa fa-telegram"></i></a>
      </div>

      <ul class="nav">
        <li>@include('shared/langSwitcher')</li>
      </ul>
    @endcomponent

    <div class="wrapper">
      <h1>{{__('NIC is on:')}} <span style="color:#ee3d49; font-weight: bold;">{!!__('15% bonus')!!}</span> — 3 {{__('days left!')}}</h1>
      <p style="opacity: 0;" class="topblock_subtitle">
        {{__('Time left')}}:
        <span class="inline-countdown">
          <span data-key="days"></span>{{__('d')}}
          <span data-key="hours"></span>{{__('h')}}
          <span data-key="minutes"></span>{{__('m')}}
          <span data-key="seconds"></span>{{__('s')}}
        </span>
      </p>

      <div class="progress">
        <script>
          var icoProgress = {
            total: 10000000,
            usd: 1085124,
            eth: 120,
            btc: 10,
            participants: 202
          };
        </script>

        <div class="progress-current">
          <span class="js-progress-current">5,200,000</span> USD
        </div>

        <div class="progress-bar">
          <div class="js-progress-bar">
            <div class="progress-bar-current"></div>
          </div>
        </div>

        <div class="progress-target">
          20,000,000 USD
        </div>
      </div>

      <div class="founded-money u-cf">
        <div class="founded-money-participants">
          <span class="js-progress-participants"></span> {{__('participants')}}
        </div>
        <div class="founded-money-usd">1085124</div>
        <div class="founded-money-btc">10</div>
        <div class="founded-money-eth">230</div>
      </div>

      <div class="buttons">
        <a class="button" href="http://nic.ninance.io/invest" target="_blank">{{__('Participate!')}}</a><a class="button button-info" target="_blank" href="{{__('/docs/Ninance-WhitePaper-En.pdf')}}">
          <i class="fa fa-file-pdf-o" style="margin-right: 6px;"></i>
          {{__('White Paper')}}
        </a>
       
      </div>

      <!--<div class="buttons">
        <a class="button" href="#join-crowdsale">{{__('How to Join')}}</a><a class="button button-info" href="{{__('/docs/Ninance-WhitePaper-En.pdf')}}">
          <i class="fa fa-file-pdf-o" style="margin-right: 6px;"></i>
          {{__('White Paper')}}
        </a>
        <p style="color:#abb4bb;">
          Escrow provided by: The Token Fund and Zerion
        </p>
      </div> -->


  </section>

  
  


  <section class="section section-distribution" id="token-distribution">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('Token Distribution')}}</h1>
      <p class="from-bottom">{{__('No more than 10,000,000,000 NIC will be released')}}</p>

      <div class="distribution">
        <div class="distribution-item distribution-item-token">
          <span>75%</span>
          {{__('Token Generation Event')}}
        </div>
        <div class="distribution-pie">
          <div class="distribution-pie-icon">
          </div>
        </div>
        <div class="distribution-item distribution-item-bounty">
          <span>5%</span>
          {{__('Bounty')}}
        </div>
        <div class="distribution-item distribution-item-team">
          <span>20%</span>
          {{__('Team')}}
        </div>
      </div>

      <div class="distibution-desc">
        <a href="#faq">{{__('See detailed information')}}</a> {{__('in our FAQ section')}}.
      </div>
    </div>
  </section>

  <section class="section section-join-crowdsale" id="join-crowdsale">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('How to Join the Crowdsale')}}</h1>
      <p class="from-bottom">{{__('The process is simple and only takes ~5 minutes')}}</p>

      <h2>{{__('4 easy steps')}}</h2>

      <ol class="step-list" data-title="{{__('4 easy steps')}}">
        <li>
          <span><b>{{__('Make sure')}}</b> {{__('you comply with our')}} <a href="#terms" class="js-modal-link">{{__('Terms & Conditions')}}</a>.</span>
        </li><li>
          <span>
            <a href="http://nic.ninance.io/invest" target="_blank"><b>{{__('Open')}}</b>
            {{__('the page of Crowdsale')}}</a>.
          </span>
        </li><li>
          <span><b>{{__('Enter')}}</b> {{__('the amount of Tokens you want to purchase')}}.</span>
        </li><li>
          <span><b>{{__('Send')}}</b> {{__('the required amount to the specified wallet address and wait for 6 confirmations')}}.</span>
        </li><li>
          <span><b>{{__('Congratulations!')}}</b><br>{{__("You've just purchased NIC Tokens.")}}</span>
        </li>
      </ol>

      <a href="http://nic.ninance.io/invest" target="_blank" class="button button-centred">{{__('Participate!')}}</a>

      <!--div class="button-details">
        <a href="#wire" class="js-modal-link">{!!__('Request Wire Transfer?')!!}</a>
      </div-->

      <p style="font-size:2.6em;">{!!__('Got questions?')!!} <a href="#faq" style="font-weight:bold; color:#3434bb;">{!!__('See the detailed FAQ.')!!}</a></p><p>{!!__('If you decide to purchase more tokens, repeat steps 3-4 by signing-in to the <a href="http://nic.ninance.io/invest" target="_blank" style="color:#3434bb;">page of Crowdsale</a>.')!!}</p>

      <!--<div class="button button-centred button-waiting" style="cursor: text">
        {{__('14 November')}} 12:00 UTC
      </div>

      <p style="font-size:2.6em;">{!!__('Got questions?')!!} <a href="{!!__('/docs/Ninance-NIC-Guide-En.pdf')!!}" target="_blank" style="font-weight:bold; color:#3434bb;">{!!__('See the detailed guide.')!!}</a></p>-->

    </div>
  </section>

  <section>
    <div class="documentation" id="documentation">
      <h1 class="from-bottom">{{__('Documentation')}}</h1>

      <div class="documentation_list">
        <a href="{{__('/docs/Ninance-WhitePaper-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('White Paper')}}
        </a><a href="{{__('/docs/Ninance-WhitePaper-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('Light Paper')}}
        </a>
      </div>
    </div>
  </section>

  @include('shared/faq')
  @include('shared/powered')
  @include('shared/roadmap')
  @include('shared/team')

@endsection

