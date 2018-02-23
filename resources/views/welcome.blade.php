@extends('shared/layout')

@section('content')

  <section class="topblock topblock-home">
    <div class="topblock_bg">
      <div class="topblock_bg_inner"></div>
    </div>

    @component('shared/header')
      @slot('mobile')
        <li><a href="/nic">{!!__('Buy NIC')!!}</a></li>
        <li><a href="#next-finance">{{__('Features')}}</a></li>
        <li><a href="#roadmap">{{__('Roadmap')}}</a></li>
        <li><a href="#team">{{__('Team')}}</a></li>
        <li><a href="#faq">{{__('FAQ')}}</a></li>
        <li class="active">
          <a href="{{__('/docs/Ninance-WhitePaper-En.pdf')}}" target="_blank">
            {{__('White Paper')}}
          </a>
        </li>
        <!--li class="active">
          <a href="{{__('/docs/Ninance-LightPaper-En.pdf')}}" target="_blank">
            {{__('Light Paper')}}
          </a>
        </li-->
      @endslot

      <nav class="nav header_main-nav js-scroll-nav" role="navigation">
        <li><a href="/nic">{!!__('NIC (ICO)')!!}</a></li>
        <li><a href="#next-finance">{!!__('Features')!!}</a></li>
        <li><a href="#roadmap">{!!__('Roadmap')!!}</a></li>
        <li><a href="#team">{!!__('Team')!!}</a></li>
        <li><a href="#faq">{!!__('FAQ')!!}</a></li>
        <li><a href="#partners">{!!__('Partners')!!}</a></li>
      </nav>

      <ul class="nav header_right">
        <li>
          <div class="header_social">
            <a href="https://t.me/Ninance" class="link telegram" title="Telegram" target="_blank"> <i class="fa fa-telegram"></i>
            </a>
          </div>
        </li>
        <li class="active nav-pill">
          <a href="{{__('/docs/Ninance-WhitePaper-En.pdf')}}" target="_blank">
            {{__('White Paper')}}
          </a>
        </li><!--li class="active nav-pill">
          <a href="{{__('/docs/Ninance-LightPaper-En.pdf')}}" target="_blank">
            {{__('Light Paper')}}
          </a>
        </li-->
        <li>
          @include('shared/langSwitcher')
        </li>
      </ul>
    @endcomponent

    <div class="wrapper">
      <div class="topblock_tabs js-scroll-nav">
        <div class="topblock_tabs_list">
          <a href="#next-finance">
            {!!__('<span>Ninance</span> Building The Next Finance With Global Decentralized Exchange And Open Protocol.')!!}
          </a><!--a href="#for-investors">
            {!!__('<span>Invest</span> in crypto funds and assets. In one place.')!!}
          </a-->
        </div>
        <div class="topblock_tabs_info">
          {!!__('Ninance stands for Next Finance, we are building the next generation financial system of the future.')!!}
        </div>
      </div>

      <div class="countdown" style="margin-top:70px; margin-bottom:70px;">
        <h1>
          {{__('NIC is on:')}} <span style="color:#ee3d49; font-weight: bold;">{!!__('15% bonus')!!}</span> — 3 {{__('days left!')}}
        </h1>

        <p class="topblock_subtitle">
          Time left:

          <span class="inline-countdown">
            <span data-key="days"></span>{{__('d')}}
            <span data-key="hours"></span>{{__('h')}}
            <span data-key="minutes"></span>{{__('m')}}
            <span data-key="seconds"></span>{{__('s')}}
          </span>
        </p>

        <!--
          <div class="countdown-mini_title">
              {{__('Ninance NIC')}}

              <sup data-tooltip>
                <i class="fa fa-question-circle"></i>

                <div class="tooltip">
                <b>{{__('NIC - Token Generation Event.')}}</b>
                <br>
                {{__('It is a synonym of the ICO. We use the NIC term because NIC tokens but not coins will be issued.')}}<br><a href="/">{{__('Learn more')}} &rarr;</a>
                </div>
              </sup>
              {{__('will start on')}} <span style="font-weight:bold; color:#ee3d49">{{__('14 November')}}</span> {{__('2017, 12:00 UTC')}}
            </div>

            <p>
              <i class="fa fa-calendar-check-o"></i>
              <a href="/docs/Ninance-NIC-Start.ics">{{__('Add event to calendar')}}</a>
              {{__('and get notified')}}
            </p>
        -->
      </div>

      <!--<div class="countdown-mini">
        <div class="countdown-mini_title">
          NIC
          <sup data-tooltip>
            <i class="fa fa-question-circle"></i>

            <div class="tooltip">
              <b>{{__('NIC - Token Generation Event.')}}</b>
              <br>
              {{__('It is a synonym of the ICO. We use the NIC term because NIC tokens but not coins will be issued.')}}<br><a href="/">{{__('Learn more')}} &rarr;</a>
            </div>
          </sup>

          starts in
        </div>
        @include('shared/countdownBlock')
      </div>-->

      <div class="buttons">
        <a href="http://127.0.0.1:3000" target="_blank" class="button js-modal-link">
          {{__('Join Crowdsale!')}}
        </a>
        <a href="https://t.me/Ninance" target="_blank" class="button button-info">
          <i class="fa fa-telegram"></i>
          {{__('Join Community')}}
        </a>
        <!--
          <a href="/" class="button js-modal-link">
            {{__('Join Crowdsale!')}}
          </a>
          <a href="/" class="button button-info">
            {{__('Learn about NIC')}}
            <i class="fa fa-long-arrow-right"></i>
          </a>
        -->
      </div>

      <!-- <h1 class="main-title">
        <span class="fade-in-item">{{__('Ninance')}}</span>
        <span class="fade-in-item">{{__('is an ecosystem')}}</span><br />
        <strong class="fade-in-item">{{__('for crypto')}}-</strong>
        <strong class="fade-in-item"><a href="#for-investors">{{__('investors')}},</a></strong>
        <strong class="fade-in-item"><a href="#next-finance">{{__('traders and funds')}}.</a></strong>
      </h1>-->

      <div class="row fade-in-item" style="margin-top:100px">
        <div class="columns offset-by-two eight features">
          <i class="background-icon features-icon-l"></i>
          <i class="background-icon features-icon-r"></i>
          <div class="slider fade-in-item">
            <div class="slide">
              <div class="features-img features-img-funds"></div>
              <div class="caption">{{__('Decentralized Exchange Supported by NIC Protocol')}}.</div>
            </div>
            <!--div class="slide">
              <div class="features-img features-img-invest"></div>
              <div class="caption">{{__('Exchange any currency and store tokens through an almighty account')}}.</div>
            </div-->
            <!--div class="slide">
              <div class="features-img features-img-traders"></div>
              <div class="caption">{{__('Exchange anywhere and anytime')}}.</div>
            </div-->
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="get-notified get-notified-top">
    <div class="wrapper">
      <form action="//ninance.us17.list-manage.com/subscribe/post-json?u=226670760da9592724769f7c8&id=e7651e94ff&c=?" class="js-ajax-form" data-extra-action="/send" method="post" id="mc-embedded-subscribe-form-1">
        <div class="row">
          <div class="seven columns">
            <input required name="EMAIL" type="email" placeholder="{{__('Enter your email')}}">
          </div>
          <div class="five columns">
            <button value="Subscribe" name="subscribe" type="submit" class="button button-condensed">
              {{__('Get notified about NIC')}}!
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>



  <div class="big-title from-bottom" id="next-finance"><h1>{{__('Next Generation Finance')}}</h1></div>

  <section class="feature-1">
    <div class="wrapper">
      <i class="background-icon feature-1-icon"></i>
      <h1 class="from-bottom">{{__('Stability, Fast, Safety, Global')}}</h1>
      <p class="from-bottom">{{__('Operating through an almighty decentralized account')}}</p>
      <div class="row section-image-example">
        <div class="offset-by-one five columns">
          <div class="text">
            <p>{{__('Ninance is built with strong technical architecture, which brings stable performance.')}}.</p>
			 <p>{{__('Our matching engine is capable of sustaining 1,000,000 orders per second, Ninance use the highest security standards to ensure the safety.')}}.</p>
            <div class="section-img-wrap mobile-only">
              <div class="section-img"></div>
            </div>
            <p>{{__('Ninance is a worldwide exchange without borders, we will support the major languages over the world.')}}.</p>
          </div>
        </div>
        <div class="six columns no-mobile fade-in-right">
          <div class="section-img-wrap">
            <div class="section-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  



  <section class="feature-2">
    <i class="background-icon feature-2-icon"></i>

    <div class="wrapper">
      <h1 class="from-bottom">{{__('Innovative Index, Multiple Products')}}</h1>
      <p class="from-bottom">{{__('You can trade blockchain assets, futures etc.')}}</p>
      <div class="row section-image-example">
        <div class="offset-by-one five columns">
          <div class="section-img-wrap fade-in-left">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="offset-by-one five columns">
          <div class="text">
            <p>{{__('Ninance supports all main crypto-currency and token, and it also supports crypto futures.')}}.</p>
            <p>{{__('We will provide many innovative index for analysis, such as Global blockchain index and etc. ')}}.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--section class="send-request send-request-body section" id="partnership">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('Want to become one of the first funds and traders using our ecosystem?')}}</h1>

      <form action="//Ninance.us16.list-manage.com/subscribe/post-json?u=10249fa68b5f02a162df5af34&id=6317d830cb&c=?" data-extra-action="/sendfull" class="js-ajax-form" method="post" id="mc-embedded-subscribe-form-2">
        <div class="row">
          <div class="six columns">
            <input required value="" name="NAME" id="mce-NAME" placeholder="{{__('Your Name')}}">
          </div>
          <div class="six columns">
            <input required name="COMPANY" id="mce-COMPANY" placeholder="{{__('Company')}}">
          </div>
        </div>
        <div class="row">
          <div class="six columns"><input required type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="{{__('Email')}}"></div>
          <div class="six columns"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">{{__('Send Request')}}</button></div>
        </div>
      </form>
    </div>
  </section-->

  <!--div class="big-title from-bottom" id="for-investors"><h1>{{__('For investors')}}</h1></div-->

  <section class="feature-3">
    <i class="background-icon feature-3-icon offset-by-one"></i>

    <div class="wrapper">
      <h1 class="from-bottom">{{__('Trade Anytime, Trade Anywhere')}}</h1>
      <p class="from-bottom">{{__('Crypto-currency and token only')}}</p>

      <div class="row section-image-example">
        <div class="mobile-only">
          <div class="section-img-wrap fade-in-right">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="offset-by-two-sd four-sd six columns">
          <div class="text">
            <p>{{__('Crypto asset is the next generation finance, it is the future of the finance.')}}.</p>
            <p>{{__('Ninance supports crypto asset only, and users will trade anytime and anywhere all over the world.')}}. </p>
          </div>
        </div>
        <div class="columns five-sd six no-mobile">
          <div class="section-img-wrap fade-in-right">
            <div class="section-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="feature-4">
    <div class="wrapper">
      <i class="background-icon feature-4-top-icon"></i>
      <i class="background-icon feature-4-bottom-icon"></i>

      <h1 class="from-bottom">{{__('Decentralized Exchange And Protocol')}}</h1>
      <p class="from-bottom">{{__('NIC protocol powered decentralized exchange')}}</p>
      <div class="row section-image-example">
        <div class="offset-by-one-sd five-sd six columns">
          <div class="section-img-wrap fade-in-left">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="columns offset-by-one-sd four-sd six">
          <div class="text">
            <p>{{__('Ninance is building the next generation of finance with decentralized exchange to ensure the reliability.')}}.</p>
            <p>{{__('Ninance is powered by NIC protocol, which is about decentralized exchange protocol.')}}.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  
    <!--section class="trading-app">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('Innovative Analyzation, Index')}}</h1>
      <p class="from-bottom">{{__('Practical trading terminal for traders, and a foolproof system for managing your fund')}}</p>

      <div class="tablet-only mac from-bottom"></div>
      <div class="row">
        <div class="offset-by-seven four columns">
          <h2 class="from-bottom">{{__('Most powerful and user-friendly trading terminal ever!')}}</h2>
        </div>
      </div>
      <div class="tablet-only ipad from-bottom"></div>

      <div class="mac-ipad no-tablet">
        <div class="mac from-bottom"></div>
        <div class="ipad from-bottom"></div>
        <h3>{{__('Manage your fund’s portfolio on any device')}}</h3>
      </div>
    </div>
  </section-->
  <!--section class="pay-with">
    <div class="wrapper">
      <i class="background-icon pay-with-icon"></i>

      <h1 class="from-bottom">{{__('Pay by Credit/Debit Card and Fiat money')}}</h1>
      <p class="from-bottom">{{__('Yes, we accept payments in fiat currencies!')}}</p>
      <div class="row">
        <div class="offset-by-four four columns">
          <div class="section-img-wrap pay-1">
            <div class="section-img pay-with-screen"></div>
            <div class="pay-1-add pay-with-screen"></div>
          </div>
          <div class="section-img-wrap pay-2">
            <div class="section-img pay-with-screen"></div>
            <div class="pay-2-add pay-with-screen"></div>
          </div>
          <div class="text">
            <p>{{__('The payment gateway integrated with our platform allows you to accept payments in traditional "fiat" currencies (USD, EUR)')}}.</p>
            <p>{{__('Investors can convert fiat currencies into crypto-currencies and tokens, and conduct reverse operations on the Ninance platform')}}.</p>
          </div>
          <div class="section-img-wrap pay-3">
            <div class="section-img pay-with-screen"></div>
            <div class="pay-3-add pay-with-screen"></div>
          </div>
        </div>
      </div>
    </div>
  </section-->

  @include('shared/devices')
  @include('shared/roadmap')
  @include('shared/tech')
  @include('shared/team')
  @include('shared/faq')

  <section class="get-notified get-notified-bottom">
    <div class="wrapper">
      <form action="//ninance.us17.list-manage.com/subscribe/post-json?u=226670760da9592724769f7c8&id=e7651e94ff&c=?" data-extra-action="/send" class="js-ajax-form u-cf" method="post" id="mc-embedded-subscribe-form-1" target="_blank">
        <h1 class="get-notified-title">{{__('Get notified when we go into NIC!')}}</h1>
        <input required name="EMAIL" type="email" placeholder="{{__('Enter your email address')}}">
        <button value="Subscribe" name="subscribe" type="submit" class="button">{{__('Get notified!')}}</button>
      </form>
    </div>
  </section>

@endsection
