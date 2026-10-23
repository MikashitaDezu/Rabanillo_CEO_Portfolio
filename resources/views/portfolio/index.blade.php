<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $portfolio['name'] }} | IT & IoT Specialist Portfolio</title>
    <meta name="description" content="Portfolio of {{ $portfolio['name'] }} - 4th year BSIT student at UEP, Capstone Lead for LibraGuard. Full-stack Laravel, Flutter, ESP32 IoT, and Proxmox VE homelab.">
    <meta name="keywords" content="Carl Emmanuel Rabanillo, LibraGuard, UEP, BSIT, Laravel, Flutter, ESP32, IoT, Proxmox, Homelab, Pangasinan IT">
    <meta name="author" content="{{ $portfolio['name'] }}">
    
    <!-- OpenGraph / Social Meta -->
    <meta property="og:title" content="{{ $portfolio['name'] }} | IT & IoT Specialist">
    <meta property="og:description" content="{{ $portfolio['summary'] }}">
    <meta property="og:image" content="{{ asset($portfolio['images']['portrait']) }}">
    <meta property="og:url" content="https://{{ $portfolio['domain'] }}">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>⚡</text></svg>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    <!-- ====================================================================
         NAVIGATION BAR
         ==================================================================== -->
    <header class="site-nav">
        <div class="container nav-wrapper">
            <a href="#hero" class="brand">
                <span class="brand-badge">CR</span>
                <div class="brand-text">
                    <span class="brand-name">{{ $portfolio['name'] }}</span>
                    <span class="brand-sub">{{ $portfolio['domain'] }}</span>
                </div>
            </a>

            <nav>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#hero" class="nav-link active">Home</a></li>
                    <li><a href="#libraguard" class="nav-link">LibraGuard</a></li>
                    <li><a href="#projects" class="nav-link">Projects</a></li>
                    <li><a href="#services" class="nav-link">Services</a></li>
                    <li><a href="#skills" class="nav-link">Skills</a></li>
                    <li><a href="#education" class="nav-link">Education</a></li>
                    <li><a href="#certs" class="nav-link">Certificates</a></li>
                    <li><a href="#beyond" class="nav-link">Beyond Code</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <button type="button" class="theme-toggle-btn" id="themeToggleBtn" aria-label="Toggle visual theme">
                    <span id="themeToggleIcon">
                        <!-- Sun Icon default for dark theme -->
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                    </span>
                </button>

                <a href="#contact" class="btn btn-primary" style="padding: 9px 18px; font-size: 0.88rem;">
                    <span>Connect</span>
                </a>

                <button type="button" class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle navigation menu">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <main>
        <!-- ====================================================================
             HERO SECTION
             ==================================================================== -->
        <section id="hero" class="hero-section">
            <div class="container hero-grid">
                <div class="hero-content">
                    <div class="status-chip">
                        <span class="ping-dot"></span>
                        <span>{{ $portfolio['status_badge'] }}</span>
                    </div>

                    <h1 class="hero-title">
                        Hello, I'm <span class="gradient-text">{{ $portfolio['name'] }}</span>
                    </h1>

                    <p class="hero-tagline">
                        {{ $portfolio['summary'] }}
                    </p>

                    <div class="hero-actions">
                        <a href="#libraguard" class="btn btn-primary">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                            <span>Explore LibraGuard</span>
                        </a>
                        <a href="#contact" class="btn btn-secondary">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>Get in Touch</span>
                        </a>
                    </div>

                    <div class="hero-meta-strip">
                        <div class="hero-meta-item">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>Pangasinan, Philippines</span>
                        </div>
                        <div class="hero-meta-item">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                            <span>BSIT • UEP (2023 - 2027)</span>
                        </div>
                        <div class="hero-meta-item">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                            <span>Proxmox VE Node Online</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Visual: Portrait Card & Live Homelab Server Rack -->
                <div class="hero-visual">
                    <!-- Profile Card -->
                    <div class="profile-card-header">
                        <div class="profile-photo-wrapper" data-lightbox-src="{{ asset($portfolio['images']['portrait']) }}" title="Click to view full portrait" style="cursor: pointer;">
                            <img src="{{ asset($portfolio['images']['portrait']) }}" alt="{{ $portfolio['name'] }}" class="profile-photo">
                        </div>
                        <div class="profile-info">
                            <h3>{{ $portfolio['name'] }}</h3>
                            <p>{{ $portfolio['title'] }}</p>
                            <div class="profile-pills">
                                <span class="pill-sm">Capstone Lead</span>
                                <span class="pill-sm">IoT Firmware</span>
                                <span class="pill-sm">Homelab Admin</span>
                            </div>
                        </div>
                    </div>

                    <!-- Live Server Rack Module -->
                    <aside class="server-rack" aria-label="Homelab Cluster Telemetry">
                        <div class="rack-chassis-top">
                            <div class="rack-title">
                                <div class="rack-screws">
                                    <span class="screw"></span>
                                    <span class="screw"></span>
                                </div>
                                <span>PROXMOX VE CLUSTER • NODE-01</span>
                            </div>
                            <div>
                                <span style="color: var(--emerald-light); font-size: 0.72rem;">● 24/7 ACTIVE</span>
                            </div>
                        </div>

                        <!-- Containers -->
                        <div class="rack-unit">
                            <span class="rack-led"></span>
                            <div>
                                <div class="rack-unit-name">Nextcloud Core File Sync</div>
                                <div class="rack-unit-desc">Encrypted private storage & continuous backup</div>
                            </div>
                            <span class="rack-unit-id">CT 100</span>
                        </div>

                        <div class="rack-unit">
                            <span class="rack-led cyan"></span>
                            <div>
                                <div class="rack-unit-name">PaperMC + Geyser Crossplay</div>
                                <div class="rack-unit-desc">High-throughput Java 25 & Bedrock world</div>
                            </div>
                            <span class="rack-unit-id">CT 102</span>
                        </div>

                        <div class="rack-unit">
                            <span class="rack-led"></span>
                            <div>
                                <div class="rack-unit-name">Cloudflare Zero Trust Ingress</div>
                                <div class="rack-unit-desc">Encrypted WAN tunnel without open router ports</div>
                            </div>
                            <span class="rack-unit-id">CT 103</span>
                        </div>

                        <div class="rack-unit">
                            <span class="rack-led"></span>
                            <div>
                                <div class="rack-unit-name">Pi-hole DNS Sinkhole</div>
                                <div class="rack-unit-desc">Network-wide ad-blocking and telemetry shield</div>
                            </div>
                            <span class="rack-unit-id">CT 104</span>
                        </div>

                        <div class="rack-unit">
                            <span class="rack-led cyan"></span>
                            <div>
                                <div class="rack-unit-name">Tailscale Mesh Gateway</div>
                                <div class="rack-unit-desc">WireGuard encrypted mesh overlay network</div>
                            </div>
                            <span class="rack-unit-id">CT 105</span>
                        </div>

                        <!-- Live Telemetry Bar -->
                        <div class="rack-telemetry-bar">
                            <div class="rack-live-stats">
                                <div class="rack-stat-pill">
                                    <span>CPU:</span>
                                    <span class="rack-stat-val" id="rackCpu">18%</span>
                                </div>
                                <div class="rack-stat-pill">
                                    <span>RAM:</span>
                                    <span class="rack-stat-val" id="rackRam">5.8G / 16G</span>
                                </div>
                                <div class="rack-stat-pill">
                                    <span>TEMP:</span>
                                    <span class="rack-stat-val" id="rackTemp">41°C</span>
                                </div>
                            </div>
                            <div>
                                <span>Dell OptiPlex</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             CAPSTONE PROJECT: LIBRAGUARD
             ==================================================================== -->
        <section id="libraguard" class="section-block">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Capstone Flagship</span>
                    <h2 class="section-title">LibraGuard Smart Library System</h2>
                    <p class="section-desc">
                        An automated, end-to-end library operations and security ecosystem deployed at the University of Eastern Pangasinan Library, integrating custom embedded IoT hardware with real-time web administration and a companion mobile app.
                    </p>
                </div>

                @php
                    $libraguard = collect($portfolio['projects'])->firstWhere('id', 'libraguard');
                @endphp

                <div class="capstone-showcase">
                    <div class="capstone-grid">
                        <!-- Branding & Seal -->
                        <div class="capstone-branding">
                            <div class="capstone-logo-box" data-lightbox-src="{{ asset($portfolio['images']['libraguard_seal']) }}" title="Click to view full 3D seal" style="cursor: pointer;">
                                <img src="{{ asset($portfolio['images']['libraguard_seal']) }}" alt="University of Eastern Pangasinan LibraGuard Official Seal" class="capstone-logo-img">
                            </div>
                            <div>
                                <span class="capstone-role-badge">Lead Architect & Developer</span>
                                <h3 style="margin-top: 10px; font-family: var(--font-display); font-size: 1.25rem;">LibraGuard</h3>
                                <p style="font-size: 0.8rem; color: var(--text-dim); margin-top: 4px;">University of Eastern Pangasinan</p>
                            </div>
                        </div>

                        <!-- System Details -->
                        <div class="capstone-info">
                            <div class="capstone-header">
                                <div>
                                    <h3 class="capstone-title">{{ $libraguard['title'] }}</h3>
                                    <p class="capstone-sub">{{ $libraguard['subtitle'] }}</p>
                                </div>
                                <div class="capstone-actions">
                                    <a href="{{ $libraguard['live_url'] }}" target="_blank" rel="noopener" class="btn btn-primary" style="padding: 10px 18px; font-size: 0.88rem;">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        <span>Live System</span>
                                    </a>
                                    <a href="{{ $libraguard['github_url'] }}" target="_blank" rel="noopener" class="btn btn-secondary" style="padding: 10px 18px; font-size: 0.88rem;">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                        <span>GitHub</span>
                                    </a>
                                </div>
                            </div>

                            <p class="capstone-desc">
                                {{ $libraguard['description'] }}
                            </p>

                            <!-- Tri-Tier Architecture Breakdown -->
                            <div class="architecture-tabs-container">
                                <div class="architecture-grid">
                                    <!-- IoT Stack -->
                                    <div class="arch-card">
                                        <div class="arch-card-header">
                                            <div class="arch-icon">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                            </div>
                                            <span>{{ $libraguard['architecture']['iot']['title'] }}</span>
                                        </div>
                                        <ul class="arch-list">
                                            @foreach($libraguard['architecture']['iot']['components'] as $comp)
                                                <li>{{ $comp }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <!-- Web Stack -->
                                    <div class="arch-card">
                                        <div class="arch-card-header">
                                            <div class="arch-icon">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                            </div>
                                            <span>{{ $libraguard['architecture']['web']['title'] }}</span>
                                        </div>
                                        <ul class="arch-list">
                                            @foreach($libraguard['architecture']['web']['components'] as $comp)
                                                <li>{{ $comp }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <!-- Mobile Stack -->
                                    <div class="arch-card">
                                        <div class="arch-card-header">
                                            <div class="arch-icon">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                            </div>
                                            <span>{{ $libraguard['architecture']['mobile']['title'] }}</span>
                                        </div>
                                        <ul class="arch-list">
                                            @foreach($libraguard['architecture']['mobile']['components'] as $comp)
                                                <li>{{ $comp }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tags-cluster" style="margin-top: 8px;">
                                @foreach($libraguard['tags'] as $tag)
                                    <span class="tag-pill">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             PROJECTS & HOMELAB SYSTEMS
             ==================================================================== -->
        <section id="projects" class="section-block">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Engineering Portfolio</span>
                    <h2 class="section-title">Systems & Software Projects</h2>
                    <p class="section-desc">
                        A collection of bare-metal hypervisor nodes, cross-platform game servers, hybrid desktop bridges, and 3D computer graphics creations.
                    </p>
                </div>

                <div class="projects-grid">
                    @foreach($portfolio['projects'] as $proj)
                        @if($proj['id'] !== 'libraguard')
                            <div class="project-card">
                                <div>
                                    <span class="project-badge">{{ $proj['badge'] }}</span>
                                    <h3 class="project-title">{{ $proj['title'] }}</h3>
                                    <p style="font-size: 0.82rem; color: var(--emerald-light); font-family: var(--font-mono); margin-top: 4px;">{{ $proj['subtitle'] }}</p>
                                    <p class="project-desc" style="margin-top: 14px;">
                                        {{ $proj['description'] }}
                                    </p>
                                </div>

                                <div>
                                    <div class="tags-cluster">
                                        @foreach($proj['tags'] as $ptag)
                                            <span class="tag-pill">{{ $ptag }}</span>
                                        @endforeach
                                    </div>

                                    @if($proj['github_url'] || $proj['live_url'])
                                        <div style="display: flex; gap: 14px; margin-top: 18px; padding-top: 14px; border-top: 1px solid var(--border-subtle);">
                                            @if($proj['live_url'])
                                                <a href="{{ $proj['live_url'] }}" target="_blank" rel="noopener" class="nav-link" style="font-size: 0.85rem; color: var(--emerald);">
                                                    Live Demo ↗
                                                </a>
                                            @endif
                                            @if($proj['github_url'])
                                                <a href="{{ $proj['github_url'] }}" target="_blank" rel="noopener" class="nav-link" style="font-size: 0.85rem; color: var(--text-muted);">
                                                    Source Code ↗
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ====================================================================
             FIELD & HARDWARE SERVICES
             ==================================================================== -->
        <section id="services" class="section-block">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Field Capabilities</span>
                    <h2 class="section-title">Hardware & IT Technical Services</h2>
                    <p class="section-desc">
                        Hands-on diagnostic, maintenance, and physical infrastructure servicing backed by rigorous troubleshooting methodology and verified hardware diagnostics.
                    </p>
                </div>

                <div class="services-grid">
                    @foreach($portfolio['services'] as $service)
                        <div class="service-card">
                            <div class="service-icon-box">
                                @if($service['icon'] === 'cpu')
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                @elseif($service['icon'] === 'printer')
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                @else
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 7l-7 5 7 5V7z"></path><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                @endif
                            </div>

                            <h3 class="service-title">{{ $service['title'] }}</h3>
                            <p class="service-desc">{{ $service['desc'] }}</p>

                            <div class="service-badges">
                                @foreach($service['badges'] as $sbadge)
                                    <span class="pill-sm">{{ $sbadge }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ====================================================================
             SKILLS MATRIX
             ==================================================================== -->
        <section id="skills" class="section-block">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Technical Stack</span>
                    <h2 class="section-title">Skills & Proficiencies</h2>
                    <p class="section-desc">
                        Full spectrum competencies spanning low-level microcontroller circuits, server hypervisors, modern frameworks, and diagnostic utilities.
                    </p>
                </div>

                <!-- Controls & Search -->
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 24px;">
                    <div class="skills-controls" style="margin-bottom: 0;">
                        <button type="button" class="skill-tab-btn active" data-filter="all">All Skills</button>
                        <button type="button" class="skill-tab-btn" data-filter="software">Software & Code</button>
                        <button type="button" class="skill-tab-btn" data-filter="hardware">Hardware & IoT</button>
                        <button type="button" class="skill-tab-btn" data-filter="systems">Systems & Network</button>
                        <button type="button" class="skill-tab-btn" data-filter="it_services">Field Services</button>
                        <button type="button" class="skill-tab-btn" data-filter="workflows">Workflows & Gaming</button>
                    </div>

                    <div style="position: relative; min-width: 240px;">
                        <input type="text" id="skillSearchInput" placeholder="Quick search skills..." class="form-control" style="padding-left: 36px; padding-top: 8px; padding-bottom: 8px; font-size: 0.88rem;">
                        <span style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: var(--text-dim);">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </span>
                    </div>
                </div>

                <!-- Matrix Cards Grid -->
                <div class="skills-matrix-grid" id="skillsGrid">
                    @foreach($portfolio['skill_groups'] as $groupKey => $group)
                        @foreach($group['items'] as $item)
                            <div class="skill-card" data-category="{{ $groupKey }}">
                                <div class="skill-card-info">
                                    <span class="skill-name">{{ $item['name'] }}</span>
                                    <span class="skill-type">{{ $group['category'] }} • {{ $item['level'] }}</span>
                                </div>
                                <span class="skill-badge">{{ $item['badge'] }}</span>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ====================================================================
             EDUCATION & ACADEMIC BACKGROUND
             ==================================================================== -->
        <section id="education" class="section-block">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Academic Milestones</span>
                    <h2 class="section-title">Education History</h2>
                    <p class="section-desc">
                        A solid academic track record progressing from vocational ICT foundations to tertiary software and information technology leadership.
                    </p>
                </div>

                <div class="timeline">
                    @foreach($portfolio['education'] as $edu)
                        <div class="timeline-item {{ $edu['current'] ? 'active' : 'past' }}">
                            <div class="timeline-marker"></div>
                            <div class="timeline-card">
                                <div class="timeline-header">
                                    <span class="timeline-badge">{{ $edu['badge'] }}</span>
                                    <span class="timeline-period">{{ $edu['period'] }}</span>
                                </div>
                                <h3 class="timeline-degree">{{ $edu['degree'] }}</h3>
                                <p class="timeline-institution">{{ $edu['institution'] }}</p>
                                <p class="timeline-notes">{{ $edu['notes'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ====================================================================
             CERTIFICATIONS & CREDENTIALS
             ==================================================================== -->
        <section id="certs" class="section-block">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Verified Competencies</span>
                    <h2 class="section-title">Certifications & Training</h2>
                    <p class="section-desc">
                        Accredited training and cybersecurity achievements verifying proficiency in ethical hacking, network defenses, and threat analysis.
                    </p>
                </div>

                <div class="certs-grid">
                    @foreach($portfolio['certifications'] as $cert)
                        <div class="cert-card">
                            <div class="cert-top">
                                <span class="cert-badge">{{ $cert['badge'] }}</span>
                                <span class="cert-date">{{ $cert['date'] }}</span>
                            </div>
                            <h3 class="cert-title">{{ $cert['title'] }}</h3>
                            <p class="cert-issuer">{{ $cert['issuer'] }}</p>
                            <p class="cert-desc">{{ $cert['desc'] }}</p>
                        </div>
                    @endforeach

                    <!-- Upcoming Certifications Slot for Easy Expansion -->
                    <div class="cert-card" style="border-style: dashed; background: transparent; justify-content: center; align-items: center; text-align: center; min-height: 180px;">
                        <div style="color: var(--text-dim); display: flex; flex-direction: column; align-items: center; gap: 8px;">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                            <span style="font-weight: 600; font-size: 0.95rem;">Additional Certifications</span>
                            <span style="font-size: 0.8rem;">Currently pursuing advanced network & cloud systems coursework.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             BEYOND CODE (Visual Gallery & Passions)
             ==================================================================== -->
        <section id="beyond" class="section-block">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Life & Exploration</span>
                    <h2 class="section-title">Beyond the Screen</h2>
                    <p class="section-desc">
                        A glimpse into outdoor vistas, ambient photography, and gaming pursuits that keep the mind sharp and inspired.
                    </p>
                </div>

                <div class="beyond-grid">
                    <!-- Main Ambient Photo -->
                    <div class="gallery-primary-card" data-lightbox-src="{{ asset($portfolio['images']['night_lights']) }}">
                        <img src="{{ asset($portfolio['images']['night_lights']) }}" alt="Carl standing under tree lights at night" class="gallery-img">
                        <div class="gallery-overlay">
                            <span class="gallery-tag">Night Photography</span>
                            <h3 class="gallery-title">Under the Ambient Canopy</h3>
                            <p class="gallery-caption">Taking a moment away from terminal monitors beneath glowing warm lights.</p>
                        </div>
                    </div>

                    <!-- Side Stack -->
                    <div class="gallery-side-stack">
                        <div class="gallery-side-card" data-lightbox-src="{{ asset($portfolio['images']['landscape']) }}">
                            <img src="{{ asset($portfolio['images']['landscape']) }}" alt="Scenic rolling green hill vista in Pangasinan" class="gallery-img" style="max-height: 220px;">
                            <div class="gallery-overlay" style="padding: 20px;">
                                <span class="gallery-tag">Scenic Nature</span>
                                <h4 class="gallery-title" style="font-size: 1.15rem;">Vistas Across the Greens</h4>
                            </div>
                        </div>

                        <div class="gallery-side-card" data-lightbox-src="{{ asset($portfolio['images']['selfie']) }}">
                            <img src="{{ asset($portfolio['images']['selfie']) }}" alt="Candid moments with companion" class="gallery-img" style="max-height: 220px;">
                            <div class="gallery-overlay" style="padding: 20px;">
                                <span class="gallery-tag">Moments</span>
                                <h4 class="gallery-title" style="font-size: 1.15rem;">Community & Fellowship</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gaming & Strategy Interests -->
                <div style="margin-top: 48px;">
                    <h3 style="font-family: var(--font-display); font-size: 1.35rem; font-weight: 700;">Gaming & Hardware Optimization</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-top: 4px;">
                        Passionate about competitive tactical shooters, open-world ARPGs, sandbox crafting, and tuning graphics pipelines for minimal input latency.
                    </p>

                    <div class="gaming-grid">
                        @foreach($portfolio['gaming'] as $game)
                            <div class="game-card">
                                <div>
                                    <div class="game-header">
                                        <h4 class="game-name">{{ $game['name'] }}</h4>
                                        @if(isset($game['platform']))
                                            <span class="game-platform-badge">{{ $game['platform'] }}</span>
                                        @endif
                                    </div>
                                    <div class="game-role">{{ $game['role'] }}</div>
                                    <p style="font-size: 0.78rem; color: var(--text-dim); font-family: var(--font-mono); margin-top: 4px;">{{ $game['category'] }}</p>
                                </div>

                                <div class="game-player-box">
                                    @if(isset($game['ign']) && $game['ign'])
                                        <div class="game-ign-row">
                                            <div style="display: flex; flex-direction: column; overflow: hidden;">
                                                <span style="font-size: 0.68rem; color: var(--text-dim); text-transform: uppercase; font-family: var(--font-mono);">Player ID / IGN</span>
                                                <span class="game-ign-text">{{ $game['ign'] }}</span>
                                            </div>
                                            <button type="button" class="copy-btn" data-copy="{{ $game['ign'] }}" data-label="{{ $game['name'] }} IGN" title="Copy in-game name/ID">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                                <span>Copy</span>
                                            </button>
                                        </div>
                                    @endif

                                    @if(isset($game['profile_url']) && $game['profile_url'])
                                        <a href="{{ $game['profile_url'] }}" target="_blank" rel="noopener" class="game-link-btn">
                                            <span>{{ $game['link_label'] ?? 'View Profile' }}</span>
                                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             CONTACT SECTION
             ==================================================================== -->
        <section id="contact" class="section-block">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Direct Communication</span>
                    <h2 class="section-title">Get In Touch</h2>
                    <p class="section-desc">
                        Whether you are looking for an internship candidate, capstone collaborator, hardware diagnostic technician, or IoT consultant, my inbox and channels are open.
                    </p>
                </div>

                <div class="contact-grid">
                    <!-- Channels & Quick Copy -->
                    <div class="contact-channels">
                        <!-- Email -->
                        <div class="channel-card">
                            <div class="channel-info">
                                <span class="channel-label">Email Address</span>
                                <a href="mailto:{{ $portfolio['contact']['email'] }}" class="channel-val">{{ $portfolio['contact']['email'] }}</a>
                            </div>
                            <button type="button" class="copy-btn" data-copy="{{ $portfolio['contact']['email'] }}" data-label="Email">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                <span>Copy</span>
                            </button>
                        </div>

                        <!-- Phone Numbers -->
                        @foreach($portfolio['contact']['phones'] as $phone)
                            <div class="channel-card">
                                <div class="channel-info">
                                    <span class="channel-label">{{ $phone['provider'] }} Mobile</span>
                                    <a href="tel:{{ $phone['raw'] }}" class="channel-val">{{ $phone['number'] }}</a>
                                </div>
                                <button type="button" class="copy-btn" data-copy="{{ $phone['number'] }}" data-label="{{ $phone['provider'] }} Number">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                    <span>Copy</span>
                                </button>
                            </div>
                        @endforeach

                        <!-- Discord -->
                        <div class="channel-card">
                            <div class="channel-info">
                                <span class="channel-label">Discord Community Handle</span>
                                <span class="channel-val">MikashitaDezu</span>
                            </div>
                            <button type="button" class="copy-btn" data-copy="945966535871188992" data-label="Discord ID">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                <span>Copy ID</span>
                            </button>
                        </div>

                        <!-- Social Channels Pill Row -->
                        <div class="social-links-row">
                            @foreach($portfolio['contact']['socials'] as $social)
                                <a href="{{ $social['url'] }}" target="_blank" rel="noopener" class="social-pill-btn">
                                    <span>{{ $social['name'] }}</span>
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Interactive Contact Form -->
                    <div class="contact-form-card">
                        <div id="contactStatusBox" style="display: {{ session('success') ? 'block' : 'none' }};">
                            @if(session('success'))
                                <div class="alert-box alert-success">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif
                        </div>

                        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" id="name" name="name" required class="form-control" placeholder="e.g. Alex Morgan" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" id="email" name="email" required class="form-control" placeholder="alex@domain.com" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone / Mobile (Optional)</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="+63 9xx-xxx-xxxx" value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="form-label">Inquiry Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Project, Internship, or Service" value="{{ old('subject') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message" class="form-label">Detailed Message *</label>
                                <textarea id="message" name="message" required class="form-control" placeholder="Describe your project, question, or diagnostic requirement...">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" id="contactSubmitBtn" class="btn btn-primary" style="width: 100%; margin-top: 8px;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                <span>Transmit Message</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ====================================================================
         FOOTER
         ==================================================================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <span style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700;">{{ $portfolio['name'] }}</span>
                    <span class="footer-copy">Bachelor of Science in Information Technology • University of Eastern Pangasinan</span>
                </div>

                <div class="social-links-row" style="margin-top: 0;">
                    @foreach($portfolio['contact']['socials'] as $soc)
                        <a href="{{ $soc['url'] }}" target="_blank" rel="noopener" style="color: var(--text-muted); font-size: 0.88rem;">{{ $soc['name'] }}</a>
                    @endforeach
                </div>
            </div>

            <div class="footer-bottom">
                <span>© {{ date('Y') }} {{ $portfolio['name'] }}. Built with Laravel 12 &amp; Modern Vanilla CSS.</span>
                <span>Self-Hosted &amp; Scaled on {{ $portfolio['domain'] }}</span>
            </div>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div class="lightbox-modal" id="lightboxModal">
        <div class="lightbox-content">
            <button type="button" class="lightbox-close-btn" id="lightboxClose">&times;</button>
            <img src="" alt="Enlarged view" class="lightbox-img" id="lightboxImg">
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
