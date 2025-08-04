<?php get_header("top"); ?>
    <main>
      <!-- Main Visual -->
      <section id="main-visual">
        <div class="mv-container">
          <div class="mv-contents">
            <div class="mv-contents-top">
              <div class="mv-company-text">
                <img src="<?php echo get_theme_file_uri('images/KUROFUNE-text.svg'); ?>" alt="KUROFUNE">
              </div>
              <h1 class="mv-copy">
                <span class="mv-copy-01">「特定技能」労働者の</span>
                <span class="mv-copy-02">採用から定着まで、</span>
                <span class="mv-copy-03">トータルサポート</span>
              </h1>
            </div>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn white">
              <span>お問い合わせはこちら</span>
              <img src="<?php echo get_theme_file_uri('images/arrow-green.svg'); ?>" alt="arrow">
            </a>
            <div class="scroll">
              <img src="<?php echo get_theme_file_uri('images/scroll.svg'); ?>" alt="scroll">
            </div>
          </div>
          <div class="mv-img pc">
            <img src="<?php echo get_theme_file_uri('images/mv-img.png'); ?>" alt="特定技能人材">
          </div>
          <div class="mv-img sp">
            <img src="<?php echo get_theme_file_uri('images/fkv-img-sp.png'); ?>" alt="特定技能人材">
          </div>
        </div>
        <div class="mv-obj01">
          <img src="<?php echo get_theme_file_uri('images/obj-ship.svg'); ?>" alt="main-visual">
        </div>
        <div class="mv-obj02">
          <img src="<?php echo get_theme_file_uri('images/obj-women.svg'); ?>" alt="main-visual">
        </div>
      </section>
      <!-- Service(人材紹介) Section -->
      <section id="service" class="bg-main">
        <div class="obj__inner">
          <div class="container">
            <div class="sec-title-container">
              <div class="sec-title-contents">
                <div class="sec-title-en">
                  <p class="p-03">Service</p>
                </div>
                <div class="sec-title-jp">
                  <h2>
                    紹介料<span class="emphasis">0</span>円。<br>
                    国内外から、優秀な人材をご紹介！
                  </h2>
                </div>
              </div>
              <div class="sec-title-text">
                <p>
                  KUROFUNEは、国内外の2つの経路から、<br>
                  幅広い外国人材をご紹介。
                </p>
              </div>
            </div>
            <div class="service-main-container">
              <div class="service-route-container">
                <div class="service-route kokunai">
                  <div class="route-content">
                    <div class="rounte-title">
                      <h4>国内ルート</h4>
                    </div>
                    <div class="rounte-text">
                      <p class="p-03">
                        当社のアプリは、すでに日本に在留している外国人の方々に広く利用されており、ビザの種類を問わず、さまざまな背景を持つ人材が登録しています。アプリ内には仕事探し機能も備えており、即戦力となる人材をスムーズにご紹介できます。
                      </p>
                    </div>
                  </div>
                  <div class="rounte-image">
                    <div class="rounte-image-content">
                      <img src="<?php echo get_theme_file_uri('images/kurofune-app-mockup.png'); ?>" alt="KUROFUNE APP" loading="lazy">
                      <p class="p-03 m-plus-1p-regular">
                        「KUROFUNE」アプリ<br>
                        「WABISABI-JAPAN」
                      </p>
                    </div>
                  </div>
                </div>
                <div class="two-line">
                  <span class="green"></span>
                  <span class="red"></span>
                </div>
                <div class="service-route kaigai">
                  <div class="route-content">
                    <div class="rounte-title">
                      <h4>海外ルート</h4>
                    </div>
                    <div class="rounte-text">
                      <p class="p-03">
                        8カ国・100以上のエージェント
                        とのネットワークを活用し、
                        海外からの人材紹介にも幅広く対応。
                        信頼できる送り出し機関を通じて、
                        適切な人材をご紹介します。
                      </p>
                    </div>
                  </div>
                  <div class="rounte-image">
                    <div class="rounte-image-countries m-plus-1p-regular">
                      <div class="rounte-image-countries-text">
                        <p class="p-04">現地のエージェント</p>
                      </div>
                      <div class="rounte-image-countries-img">
                        <ul>
                          <li class="countries-item">
                            <img src="<?php echo get_theme_file_uri('images/Vietnam.svg'); ?>" alt="Vietnam" loading="lazy">
                            <p class="p-04">ベトナム</p>
                          </li>
                          <li class="countries-item">
                            <img src="<?php echo get_theme_file_uri('images/Philippines.svg'); ?>" alt="Philippines" loading="lazy">
                            <p class="p-04">フィリピン</p>
                          </li>
                          <li class="countries-item">
                            <img src="<?php echo get_theme_file_uri('images/srilanka.svg'); ?>" alt="srilanka" loading="lazy">
                            <p class="p-04">スリランカ</p>
                          </li>
                          <li class="countries-item">
                            <img src="<?php echo get_theme_file_uri('images/Indonesia.svg'); ?>" alt="Indonesia" loading="lazy">
                            <p class="p-04">インドネシア</p>
                          </li>
                          <li class="countries-item">
                            <img src="<?php echo get_theme_file_uri('images/Cambodia.svg'); ?>" alt="Cambodia" loading="lazy">
                            <p class="p-04">カンボジア</p>
                          </li>
                          <li class="countries-item">
                            <img src="<?php echo get_theme_file_uri('images/nepal.svg'); ?>" alt="nepal" loading="lazy">
                            <p class="p-04">ネパール</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="service-route-flow">
                <img src="<?php echo get_theme_file_uri('images/jinzai-flow.svg'); ?>" alt="人材紹介フロー" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CTA  -->
      <section id="cta-secondary" class="cta-padding">
        <div class="cta-content">
          <div class="cta-message">
            <h5>
              国内外の優秀な特定技能人材を今すぐご紹介！<br>
              紹介料0円、充実のサポート体制で、<br>
              貴社の人材課題をスピーディに解決します。
            </h5>
          </div>
          <div class="cta-btn-container">
            <div class="cta-prompt">
              まずはお気軽にお問い合わせください
            </div>
            <div class="cta-btn">
              <a href="#" class="btn">
                <span>お問い合わせはこちら</span>
                <img src="<?php echo get_theme_file_uri('images/arrow-white.svg'); ?>" alt="arrow" loading="lazy">
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- KUROFUNE PASSPORT 説明 -->
      <section id="feature" class="bg-sub nomargin-padding">
        <div class="obj__inner">
          <div class="container">
            <div class="feature-title-container">
              <div class="sec-title-container">
                <div class="sec-title-contents">
                  <div class="sec-title-en">
                    <p class="p-03">Future</p>
                  </div>
                  <div class="sec-title-jp">
                    <h2>
                      入社後のサポートも、<br>
                      KUROFUNE PASSPORTで安心。
                    </h2>
                  </div>
                </div>
                <div class="sec-title-text">
                  <p>
                    特定技能外国人に必要な<br>
                    “法定支援・定着支援”をアプリで効率化。
                  </p>
                  <div class="two-line">
                    <span class="green"></span>
                    <span class="red"></span>
                  </div>
                </div>
              </div>
              <div class="app-img">
                <img src="<?php echo get_theme_file_uri('images/App.png'); ?>" alt="KUROFUNE PASSPORT Mockup" loading="lazy">
              </div>
            </div>
            <div class="feature-list">
              <ul>
                <li class="feature-item">
                  <div class="feature-item-child feature-item-img">
                    <div class="img">
                      <img src="<?php echo get_theme_file_uri('images/feature-chat.png'); ?>" alt="Chat Support" loading="lazy">
                    </div>
                  </div>
                  <div class="feature-item-child feature-item-contents">
                    <div class="feature-title">
                      <div>
                        <img src="<?php echo get_theme_file_uri('images/feature01.svg'); ?>" alt="Feature01" loading="lazy">
                        <h4>チャット機能</h4>
                      </div>
                      <span class="line"></span>
                    </div>
                    <div class="feature-text">
                      <p class="p-02 pc">
                        外国人労働者が日常生活や仕事で感じる困りごとを、<br>
                        いつでも気軽に相談できるチャット機能を搭載。<br>
                        言語や文化の壁を越えて、安心して<br>
                        サポートを受けられる環境を提供します。
                      </p>
                      <p class="p-02 sp">
                        外国人労働者が日常生活や仕事で感じる困りごとを、
                        いつでも気軽に相談できるチャット機能を搭載。<br>
                        言語や文化の壁を越えて、安心して
                        サポートを受けられる環境を提供します。
                      </p>
                    </div>
                  </div>
                </li>
                <li class="feature-item">
                  <div class="feature-item-child feature-item-img">
                    <div class="img">
                      <img src="<?php echo get_theme_file_uri('images/feature-buddy.png'); ?>" alt="同行依頼機能" loading="lazy">
                    </div>
                  </div>
                  <div class="feature-item-child feature-item-contents">
                    <div class="feature-title">
                      <div>
                        <img src="<?php echo get_theme_file_uri('images/feature02.svg'); ?>" alt="Feature02" loading="lazy">
                        <h4>同行依頼機能</h4>
                      </div>
                      <span class="line"></span>
                    </div>
                    <div class="feature-text">
                      <p class="p-02 pc">
                        役所での手続きや銀行での口座開設など、<br>
                        慣れない場面での不安をサポート。<br>
                        アプリから簡単に同行依頼ができ、<br>
                        慣れない日本の生活もしっかりフォローします。
                      </p>
                      <p class="p-02 sp">
                        役所での手続きや銀行での口座開設など、
                        慣れない場面での不安をサポート。<br>
                        アプリから簡単に同行依頼ができ、
                        慣れない日本の生活もしっかりフォローします。
                      </p>
                    </div>
                  </div>
                </li>
                <li class="feature-item">
                  <div class="feature-item-child feature-item-img feature-item-img-pc">
                    <div class="img">
                      <img src="<?php echo get_theme_file_uri('images/feature-dashboard.png'); ?>" alt="支援履歴の見える化" loading="lazy">
                    </div>
                  </div>
                  <div class="feature-item-child feature-item-contents">
                    <div class="feature-title">
                      <div>
                        <img src="<?php echo get_theme_file_uri('images/feature03.svg'); ?>" alt="Feature03" loading="lazy">
                        <h4>支援履歴の見える化</h4>
                      </div>
                      <span class="line"></span>
                    </div>
                    <div class="feature-text">
                      <p class="p-02 pc">
                        管理画面で支援内容や対応履歴を一元管理。<br>
                        外国人の困りごとや支援ニーズを見える化することで、<br>
                        適切かつ迅速な対応が可能になります。
                      </p>
                      <p class="p-02 sp">
                        管理画面で支援内容や対応履歴を一元管理。<br>
                        外国人の困りごとや支援ニーズを見える化することで、
                        適切かつ迅速な対応が可能になります。
                      </p>
                    </div>
                  </div>
                </li>
                <li class="feature-item">
                  <div class="feature-item-child feature-item-img feature-item-img-pc">
                    <div class="img">
                      <img src="<?php echo get_theme_file_uri('images/feature-document.png'); ?>" alt="書類自動生成機能（準備中）" loading="lazy">
                    </div>
                  </div>
                  <div class="feature-item-child feature-item-contents">
                    <div class="feature-title">
                      <div>
                        <img src="<?php echo get_theme_file_uri('images/feature04.svg'); ?>" alt="Feature04" loading="lazy">
                        <h4>書類自動生成機能 <span class="preparing">（準備中）</span></h4>
                      </div>
                      <span class="line"></span>
                    </div>
                    <div class="feature-text">
                      <p class="p-02 pc">
                        在留カードや契約書などの各種書類について、<br>
                        更新期限が近づくと自動でアラート通知を送信。<br>
                        人事・労務担当者の手間を減らし、<br>
                        うっかりミスや更新忘れを防ぎます。
                      </p>
                      <p class="p-02 sp">
                        在留カードや契約書などの各種書類について、
                        更新期限が近づくと自動でアラート通知を送信。<br>
                        人事・労務担当者の手間を減らし、
                        うっかりミスや更新忘れを防ぎます。
                      </p>
                    </div>
                  </div>
                </li>
                <li class="feature-item">
                  <div class="feature-item-child feature-item-img">
                    <div class="img">
                      <img src="<?php echo get_theme_file_uri('images/feature-learning.png'); ?>" alt="教育機能" loading="lazy">
                    </div>
                  </div>
                  <div class="feature-item-child feature-item-contents">
                    <div class="feature-title">
                      <div>
                        <img src="<?php echo get_theme_file_uri('images/feature03.svg'); ?>" alt="Feature03" loading="lazy">
                        <h4>教育機能 <span class="preparing">（準備中）</span></h4>
                      </div>
                      <span class="line"></span>
                    </div>
                    <div class="feature-text">
                      <p class="p-02">
                        アプリ上で日本語能力試験（JLPT）や
                        特定技能2号試験の対策ができ、時間や場所を選ばず学習可能。
                        進捗管理機能もあるため、モチベーションを維持しながら
                        計画的に学習を進められます。
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="price">
              <div class="sec-title-container simple">
                <div class="sec-title-contents">
                  <div class="sec-title-en">
                    <p class="p-03">Price</p>
                  </div>
                  <div class="sec-title-jp">
                    <h2>
                      料金体系
                    </h2>
                  </div>
                </div>
                <div class="two-line">
                  <span class="green"></span>
                  <span class="red"></span>
                </div>
              </div>
              <div class="price-list">
                <img src="<?php echo get_theme_file_uri('images/price.png'); ?>" alt="料金表" class="pc" loading="lazy">
                <img src="<?php echo get_theme_file_uri('images/price-sp.png'); ?>" alt="料金表" class="sp" loading="lazy">
                <div class="caution">
                  <p class="p-04">
                    ※「KUROFUNE PASSPORT」による管理を依頼した場合のみ紹介料金0円になる<br>
                    ※実費負担はご負担いただきます
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CTA  -->
      <section id="cta-secondary" class="cta-padding">
        <div class="cta-content">
          <div class="cta-message">
            <h5>
              入社後のフォローも万全！<br>
              KUROFUNE PASSPORTで定着支援も効率化。
            </h5>
          </div>
          <div class="cta-btn-container">
            <div class="cta-prompt">
              まずはお気軽にお問い合わせください
            </div>
            <div class="cta-btn">
              <a href="#" class="btn">
                <span>お問い合わせはこちら</span>
                <img src="<?php echo get_theme_file_uri('images/arrow-white.svg'); ?>" alt="arrow">
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Usecase Section -->
      <!-- <section id="usecase">
        <div class="obj__inner">
          <div class="container">
            <div class="sec-title-container simple">
              <div class="sec-title-contents">
                <div class="sec-title-en">
                  <p class="p-03">
                    Use cases &<br>
                    implementation examples
                  </p>
                </div>
                <div class="sec-title-jp">
                  <h2>
                    ユースケース・導入事例
                  </h2>
                </div>
              </div>
              <div class="two-line">
                <span class="green"></span>
                <span class="red"></span>
              </div>
            </div>
            <div class="usecase-container">
              <ul>
                <li class="usecase-item">
                  <div class="usecase-img">
                    <img src="<?php echo get_theme_file_uri('images/usecase-dummy.jpg'); ?>" alt="Usecase">
                  </div>
                  <div class="usecase-content">
                    <div class="usecase-title">
                      <h5>株式会社ダミダミダミ</h4>
                    </div>
                    <div class="usecase-text">
                      <p class="p-02">
                        関東地方<br>
                        飲食料品製造業
                      </p>
                    </div>
                  </div>
                </li>
                <li class="usecase-item">
                  <div class="usecase-img">
                    <img src="<?php echo get_theme_file_uri('images/usecase-dummy.jpg'); ?>" alt="Usecase">
                  </div>
                  <div class="usecase-content">
                    <div class="usecase-title">
                      <h5>株式会社ダミダミダミ</h4>
                    </div>
                    <div class="usecase-text">
                      <p class="p-02">
                        関東地方<br>
                        飲食料品製造業
                      </p>
                    </div>
                  </div>
                </li>
                <li class="usecase-item">
                  <div class="usecase-img">
                    <img src="<?php echo get_theme_file_uri('images/usecase-dummy.jpg'); ?>" alt="Usecase">
                  </div>
                  <div class="usecase-content">
                    <div class="usecase-title">
                      <h5>株式会社ダミダミダミ</h4>
                    </div>
                    <div class="usecase-text">
                      <p class="p-02">
                        関東地方<br>
                        飲食料品製造業
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section> -->
      
      <!-- Company map Section -->
      <section id="companymap"  class="nomargin-padding">
        <div class="background-twocolor">
          <span class="white"></span>
          <span class="green"></span>
        </div>
        <div class="container">
          <div class="sec-title-container simple">
            <div class="sec-title-contents">
              <div class="sec-title-en">
                <p class="p-03">Company map</p>
              </div>
              <div class="sec-title-jp">
                <h2>
                  全国各地で導入が<br>
                  広がっています！
                </h2>
              </div>
            </div>
            <!-- <div class="two-line">
              <span class="green"></span>
              <span class="red"></span>
            </div> -->
          </div>
          <div class="companymap-layout">
            <div class="company-map-container">
              <div class="company-area">
                <div class="company-area-title">
                  <h6>導入実績のある地域一覧</h6>
                </div>
                <div class="company-area-text">
                  <p class="p-02">
                    北海道/秋田県/栃木県/茨城県<br>
                    群馬県/東京都/富山県/福井県<br>
                    静岡県/愛知県/岐阜県/大阪府<br>
                    岡山県/愛媛県/長崎県
                  </p>
                </div>
              </div>
              <div class="two-line">
                <span class="green"></span>
                <span class="red"></span>
              </div>
            </div>
            <div class="company-map-img">
              <img src="<?php echo get_theme_file_uri('images/Japan-map.png'); ?>" alt="Company Map" loading="lazy">
            </div>
          </div>
        </div>
      </section>
      
      <!-- Offline Section -->
      <section id="offline">
        <div class="container">
          <div class="sec-title-container text-center">
            <div class="sec-title-contents">
              <div class="sec-title-en">
                <p class="p-03">Offline support</p>
              </div>
              <div class="sec-title-jp">
                <h2>
                  オフラインでも<br>
                  しっかり寄り添うサポート体制。
                </h2>
              </div>
            </div>
            <div class="sec-title-text">
              <div class="two-line">
                <span class="green"></span>
                <span class="red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="slider slider-container">
          <div class="slider-item"><img src="<?php echo get_theme_file_uri('images/offline/offline-img01.jpg'); ?>" alt="Offline image" loading="lazy"></div>
          <div class="slider-item"><img src="<?php echo get_theme_file_uri('images/offline/offline-img02.jpg'); ?>" alt="Offline image" loading="lazy"></div>
          <div class="slider-item"><img src="<?php echo get_theme_file_uri('images/offline/offline-img03.jpg'); ?>" alt="Offline image" loading="lazy"></div>
          <div class="slider-item"><img src="<?php echo get_theme_file_uri('images/offline/offline-img04.jpg'); ?>" alt="Offline image" loading="lazy"></div>
          <div class="slider-item"><img src="<?php echo get_theme_file_uri('images/offline/offline-img05.jpg'); ?>" alt="Offline image" loading="lazy"></div>
          <div class="slider-item"><img src="<?php echo get_theme_file_uri('images/offline/offline-img06.jpg'); ?>" alt="Offline image" loading="lazy"></div>
        </div>
      </section>

      <!-- Concept Section -->
      <section id="concept">
        <div class="container">
          <div class="sec-title-container simple">
            <div class="sec-title-contents">
              <div class="sec-title-en">
                <p class="p-03">Concept</p>
              </div>
              <div class="sec-title-jp">
                <h2>
                  KUROFUNEについて
                </h2>
              </div>
            </div>
            <div class="two-line">
              <span class="green"></span>
              <span class="red"></span>
            </div>
          </div>
          <div class="concept-container layout-flex">
            <div class="concept-contents layout-flex-child">
              <div class="concept-text">
                <p class="p-01">
                  外国人にとって、母国と同じように<br>
                  働きやすい・住みやすいと<br>
                  感じられる社会を<br>
                  実現していくことで<br>
                  日本を「開国」していきます。<br>
                </p>
              </div>
              <!-- <div class="concept-btn">
                <a href="#" class="btn green">
                  <span>会社概要はこちら</span>
                  <img src="<?php echo get_theme_file_uri('images/arrow-white.svg'); ?>" alt="arrow">
                </a>
              </div> -->
            </div>
            <div class="concept-img layout-flex-child">
              <div class="concept-img01">
                <img src="<?php echo get_theme_file_uri('images/Concept-img01.jpg'); ?>" alt="Concept image" loading="lazy">
              </div>
              <div class="concept-img02">
                <img src="<?php echo get_theme_file_uri('images/Concept-img02.jpg'); ?>" alt="Concept image" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- News Section -->
      <section id="news">
        <div class="obj__inner">
          <div class="container">
            <div class="sec-title-container simple">
              <div class="sec-title-contents">
                <div class="sec-title-en">
                  <p class="p-03">News</p>
                </div>
                <div class="sec-title-jp">
                  <h2>
                    お知らせ・メディア掲載
                  </h2>
                </div>
              </div>
              <div class="two-line">
                <span class="green"></span>
                <span class="red"></span>
              </div>
            </div>
            <div class="news-contents">
              <ul>
                <li class="news-item">
                  <a href="https://prtimes.jp/main/html/rd/p/000000007.000048531.html" class="news-link" target="_blank">
                    <div class="news-thumbnail">
                      <img src="<?php echo get_theme_file_uri('images/kurofune-news_250724.jpg'); ?>" alt="News thumbnail" loading="lazy">
                    </div>
                    <div class="news-text">
                      <div class="news-date">2025.07.24</div>
                      <div class="news-title">
                        社内カフェのランチ補助制度を開始。
                      </div>
                      <div class="news-desc">
                        <p class="p-03">
                          社員向けに本社があるなごのキャンパス内のカフェ「yoake」でランチ代を補助する福利厚生制度を始めました
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="news-item">
                  <a href="https://prtimes.jp/main/html/rd/p/000000006.000048531.html" class="news-link" target="_blank">
                    <div class="news-thumbnail">
                      <img src="<?php echo get_theme_file_uri('images/kurofune-news_250523.jpg'); ?>" alt="News thumbnail" loading="lazy">
                    </div>
                    <div class="news-text">
                      <div class="news-date">2025.05.23</div>
                      <div class="news-title">
                        KUROFUNEがジュビロ磐田と外国人向け国別対抗サッカーを共催。
                      </div>
                      <div class="news-desc">
                        <p class="p-03">
                          ジュビロ磐田と共催で遠州地区に住む外国人を対象とした国別対抗サッカー試合を開催いたします。
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="news-item">
                  <a href="https://prtimes.jp/main/html/rd/p/000000006.000048531.html" class="news-link" target="_blank">
                    <div class="news-thumbnail">
                      <img src="<?php echo get_theme_file_uri('images/kurofune-news_250415.jpg'); ?>" alt="News thumbnail" loading="lazy">
                    </div>
                    <div class="news-text">
                      <div class="news-date">2025.04.15</div>
                      <div class="news-title">
                        FC今治と今治在住外国人向け国別対抗サッカーを共催。
                      </div>
                      <div class="news-desc">
                        <p class="p-03">
                          FC今治と共催して今治市内に住む外国人を対象とした国別対抗サッカー試合を開催いたします
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="btn-container">
                <a href="https://prtimes.jp/main/html/searchrlp/company_id/48531" class="btn green" target="_blank">
                  <span>ニュース一覧はこちら</span>
                  <img src="<?php echo get_theme_file_uri('images/arrow-white.svg'); ?>" alt="arrow" loading="lazy">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>