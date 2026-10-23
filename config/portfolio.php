<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Personal Profile Information
    |--------------------------------------------------------------------------
    */
    'name' => 'Carl Emmanuel O. Rabanillo',
    'handle' => 'MikashitaDezu',
    'domain' => 'mkdezzu.site',
    'title' => 'Information Technology Specialist & IoT Engineer',
    'status_badge' => 'Open to Internships & Tech Collaborations',
    'headline' => 'Bridging Full-Stack Systems, Embedded IoT Hardware & Self-Hosted Infrastructure.',
    'summary' => "I'm an IT enthusiast who excels across software systems, embedded IoT engineering, and homelab server infrastructure. A 4th-year BSIT student and Capstone Leader at the University of Eastern Pangasinan, driven by hands-on engineering from circuit boards to cloud deployments.",
    
    'hero_lead' => "I engineer end-to-end web architectures, design embedded microcontroller circuits, and administer bare-metal virtualization clusters.",

    'images' => [
        'portrait' => 'images/carl-portrait.png',
        'libraguard_seal' => 'images/libraguard-seal.png',
        'night_lights' => 'images/night-lights.jpg',
        'landscape' => 'images/landscape.jpg',
        'selfie' => 'images/carl-selfie.jpg',
    ],

    /*
    |--------------------------------------------------------------------------
    | Contact & Social Channels
    |--------------------------------------------------------------------------
    */
    'contact' => [
        'email' => 'rabanillocarl5@gmail.com',
        'phones' => [
            ['provider' => 'Smart', 'number' => '(+63) 961-796-4619', 'raw' => '+639617964619'],
            ['provider' => 'TNT', 'number' => '(+63) 985-130-2457', 'raw' => '+639851302457'],
        ],
        'socials' => [
            [
                'name' => 'GitHub',
                'url' => 'https://github.com/MikashitaDezu',
                'icon' => 'github',
                'username' => 'MikashitaDezu',
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/rabanillo-carl-emmanuel-o-031b05346',
                'icon' => 'linkedin',
                'username' => 'carl-emmanuel-o-031b05346',
            ],
            [
                'name' => 'Facebook',
                'url' => 'https://www.facebook.com/Rabanillo07JOK3R.MikashitaDezzuu/',
                'icon' => 'facebook',
                'username' => 'Rabanillo07JOK3R.MikashitaDezzuu',
            ],
            [
                'name' => 'Discord',
                'url' => 'https://discord.com/users/945966535871188992',
                'icon' => 'discord',
                'username' => '945966535871188992',
                'tag' => 'MikashitaDezu',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Hands-on Technical Services
    |--------------------------------------------------------------------------
    */
    'services' => [
        [
            'title' => 'PC & Desktop Maintenance',
            'icon' => 'cpu',
            'desc' => 'Hardware assembly, diagnostic health audits (SMART storage analysis), thermal repasting, RAM topology matching, CMOS resets, and OS optimization.',
            'badges' => ['Thermal Management', 'Drive Diagnostics', 'Hardware Upgrades'],
        ],
        [
            'title' => 'Printer Diagnostics & Repair',
            'icon' => 'printer',
            'desc' => 'Inkjet & laser printer troubleshooting, roller feed repair, printhead calibration, network printer configuration, and driver integration.',
            'badges' => ['Network Printing', 'Printhead Tuning', 'Hardware Alignment'],
        ],
        [
            'title' => 'CCTV Security Installation',
            'icon' => 'cctv',
            'desc' => 'End-to-end IP and analog CCTV surveillance deployment, coaxial & Ethernet CAT6 cable termination, DVR/NVR configuration, and remote mobile viewing setup.',
            'badges' => ['NVR / DVR Setup', 'IP Camera Networks', 'Remote Monitoring'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Featured Projects
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'id' => 'libraguard',
            'title' => 'LibraGuard',
            'subtitle' => 'Smart Library Automation & Security Ecosystem',
            'badge' => 'Featured Capstone',
            'role' => 'Project Lead & Full-Stack / IoT Architect',
            'logo' => 'images/libraguard-seal.png',
            'description' => 'An automated, multi-tiered library operations ecosystem deployed for the University of Eastern Pangasinan Library. Integrates custom embedded hardware terminals with real-time web portal management and cross-platform mobile access to streamline patron check-ins, book monitoring, and library volume surveillance.',
            'live_url' => 'https://libraguard-system.vercel.app/',
            'github_url' => 'https://github.com/MikashitaDezu',
            'architecture' => [
                'iot' => [
                    'title' => 'IoT Hardware Stack',
                    'components' => [
                        'ESP32 SoC Microcontroller',
                        'MAX4466 Sound Detection Sensor',
                        'MFRC522 RFID Reader / Writer',
                        'Dual-State LED Indicators',
                        'Piezo Audio Buzzer',
                        'Tactile Push Switches',
                    ],
                ],
                'web' => [
                    'title' => 'Web Management Stack',
                    'components' => [
                        'Laravel Backend Engine',
                        'PostgreSQL Relational DB',
                        'Vercel Cloud Deployment',
                        'RESTful API Gateway',
                    ],
                ],
                'mobile' => [
                    'title' => 'Mobile Application Stack',
                    'components' => [
                        'Flutter Framework',
                        'Dart Language',
                        'Cross-Platform Android & iOS',
                        'Offline Cache & Synced Storage',
                    ],
                ],
            ],
            'tags' => ['ESP32', 'Laravel', 'Flutter', 'PostgreSQL', 'Vercel', 'IoT Hardware', 'RFID'],
        ],
        [
            'id' => 'proxmox-homelab',
            'title' => 'Dell OptiPlex Bare-Metal Homelab',
            'subtitle' => 'Self-Hosted Hypervisor & Container Infrastructure',
            'badge' => '24/7 Production Node',
            'role' => 'Systems Administrator & Network Architect',
            'logo' => null,
            'description' => 'Repurposed enterprise Dell OptiPlex desktop node transformed into an energy-efficient Proxmox VE hypervisor running isolated LXC containers and Linux VMs. Protected by APC Uninterruptible Power Supply (UPS) with automated clean-shutdown monitoring.',
            'live_url' => null,
            'github_url' => null,
            'rack_units' => [
                [
                    'id' => 'CT 100',
                    'name' => 'Nextcloud Core',
                    'desc' => 'Self-hosted encrypted private cloud file syncing and media backup',
                    'status' => 'online',
                    'led' => 'emerald',
                ],
                [
                    'id' => 'CT 102',
                    'name' => 'PaperMC Crossplay Node',
                    'desc' => 'High-throughput Minecraft server with GeyserMC & Floodgate',
                    'status' => 'online',
                    'led' => 'emerald',
                ],
                [
                    'id' => 'CT 103',
                    'name' => 'Cloudflare Zero Trust Ingress',
                    'desc' => 'Zero-port WAN tunnel providing safe TLS termination',
                    'status' => 'online',
                    'led' => 'emerald',
                ],
                [
                    'id' => 'CT 104',
                    'name' => 'Pi-hole DNS Sinkhole',
                    'desc' => 'Network-wide telemetry filtering and ad-blocking gateway',
                    'status' => 'online',
                    'led' => 'emerald',
                ],
                [
                    'id' => 'CT 105',
                    'name' => 'Tailscale Mesh Meshnet',
                    'desc' => 'WireGuard-powered encrypted mesh backplane connecting all remote devices',
                    'status' => 'online',
                    'led' => 'cyan',
                ],
            ],
            'tags' => ['Proxmox VE', 'Cloudflare Tunnel', 'Tailscale', 'Pi-hole', 'Docker', 'APC UPS'],
        ],
        [
            'id' => 'minecraft-geyser',
            'title' => 'PaperMC + Geyser Crossplay Game Node',
            'subtitle' => 'High-Performance Java & Bedrock Simultaneous Server',
            'badge' => 'Active Server',
            'role' => 'Game Server Ops & Java Optimization',
            'logo' => null,
            'description' => 'Configured and optimized PaperMC server running Java 25. Employs Geyser and Floodgate protocol translation layers allowing PC Java and mobile/console Bedrock clients to seamlessly play on the same terrain with unified player inventories. Publicly routed via Playit.gg high-speed UDP tunnels.',
            'live_url' => null,
            'github_url' => null,
            'tags' => ['Java 25', 'PaperMC', 'Geyser', 'Floodgate', 'Playit.gg', 'Networking'],
        ],
        [
            'id' => 'ufo-blender',
            'title' => 'UFO 3D Scene Exploration',
            'subtitle' => 'Low-Poly / Hard-Surface Spatial Environment',
            'badge' => '3D Graphics',
            'role' => '3D Artist & Modeler',
            'logo' => null,
            'description' => 'A stylized extraterrestrial atmospheric environment modeled in Blender, exploring procedural volumetric lighting, emission materials, and spatial asset composition.',
            'live_url' => null,
            'github_url' => null,
            'tags' => ['Blender', '3D Modeling', 'Lighting', 'Atmospheric Shading'],
        ],
        [
            'id' => 'jni-desktop-bridge',
            'title' => 'Hybrid Native Desktop Bridge',
            'subtitle' => 'C++ Engine Bound to Modern Electron Frontend via JNI',
            'badge' => 'Architecture',
            'role' => 'Software Engineer',
            'logo' => null,
            'description' => 'Exploration in hybrid application architecture: utilizing the Java Native Interface (JNI) to bridge low-level compute-intensive C++ native libraries with an Electron JavaScript desktop interface, achieving native performance with responsive modern UI controls.',
            'live_url' => null,
            'github_url' => 'https://github.com/MikashitaDezu',
            'tags' => ['C++', 'Java (JNI)', 'Electron', 'JavaScript', 'Native Interop'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Skills Matrix (Structured for Categorized Filtering)
    |--------------------------------------------------------------------------
    */
    'skill_groups' => [
        'software' => [
            'category' => 'Software & Languages',
            'icon' => 'code',
            'items' => [
                ['name' => 'C++', 'level' => 'Advanced', 'type' => 'Language', 'badge' => 'Native Systems'],
                ['name' => 'Java', 'level' => 'Advanced', 'type' => 'Language', 'badge' => 'JNI & Services'],
                ['name' => 'JavaScript', 'level' => 'Proficient', 'type' => 'Language', 'badge' => 'Web & Node.js'],
                ['name' => 'Python', 'level' => 'Proficient', 'type' => 'Language', 'badge' => 'Scripting & Automation'],
                ['name' => 'Dart', 'level' => 'Proficient', 'type' => 'Language', 'badge' => 'Mobile Client'],
                ['name' => 'Bash / Shell', 'level' => 'Advanced', 'type' => 'Language', 'badge' => 'Linux Scripting'],
                ['name' => 'PowerShell', 'level' => 'Advanced', 'type' => 'Language', 'badge' => 'Windows Automation'],
                ['name' => 'Laravel', 'level' => 'Advanced', 'type' => 'Framework', 'badge' => 'MVC Web Backend'],
                ['name' => 'Flutter', 'level' => 'Proficient', 'type' => 'Framework', 'badge' => 'Mobile Apps'],
                ['name' => 'Electron', 'level' => 'Proficient', 'type' => 'Framework', 'badge' => 'Cross-Platform Desktop'],
                ['name' => 'Unity', 'level' => 'Skilled', 'type' => 'Engine', 'badge' => '2D Game Development'],
            ],
        ],
        'hardware' => [
            'category' => 'Hardware & IoT Engineering',
            'icon' => 'cpu',
            'items' => [
                ['name' => 'ESP32 Microcontrollers', 'level' => 'Expert', 'type' => 'Embedded', 'badge' => 'Circuit & Firmware'],
                ['name' => 'MFRC522 RFID Readers', 'level' => 'Expert', 'type' => 'Hardware', 'badge' => 'Access Control'],
                ['name' => 'MAX4466 Sound Sensor', 'level' => 'Advanced', 'type' => 'Sensor', 'badge' => 'Audio Telemetry'],
                ['name' => 'W5500 SPI Ethernet', 'level' => 'Proficient', 'type' => 'Hardware', 'badge' => 'Wired Embedded'],
                ['name' => 'SIM800L GSM Module', 'level' => 'Proficient', 'type' => 'Hardware', 'badge' => 'Cellular IoT'],
                ['name' => 'Discrete Components', 'level' => 'Advanced', 'type' => 'Circuitry', 'badge' => 'LEDs, Relays, Buzzers'],
                ['name' => 'Custom PC Building', 'level' => 'Expert', 'type' => 'Maintenance', 'badge' => 'Rig Assembly & Cooling'],
                ['name' => 'Thermal Management', 'level' => 'Expert', 'type' => 'Hardware', 'badge' => 'CPU/GPU Repasting'],
            ],
        ],
        'systems' => [
            'category' => 'Systems & Networking',
            'icon' => 'server',
            'items' => [
                ['name' => 'Linux Administration', 'level' => 'Advanced', 'type' => 'OS', 'badge' => 'Debian / Ubuntu CLI'],
                ['name' => 'Proxmox VE Hypervisor', 'level' => 'Advanced', 'type' => 'Virtualization', 'badge' => 'LXC & VM Clusters'],
                ['name' => 'Docker', 'level' => 'Proficient', 'type' => 'Container', 'badge' => 'App Containers'],
                ['name' => 'Tailscale Mesh VPN', 'level' => 'Advanced', 'type' => 'Networking', 'badge' => 'WireGuard P2P'],
                ['name' => 'Cloudflare Zero Trust', 'level' => 'Advanced', 'type' => 'Tunneling', 'badge' => 'Secure Tunnels'],
                ['name' => 'Pi-hole DNS Sinkhole', 'level' => 'Advanced', 'type' => 'Networking', 'badge' => 'Ad/Tracker Blocking'],
                ['name' => 'Playit.gg Tunnels', 'level' => 'Advanced', 'type' => 'Networking', 'badge' => 'UDP/TCP Port Forwarding'],
                ['name' => 'VirtualBox & Rufus', 'level' => 'Expert', 'type' => 'Tools', 'badge' => 'Bootable Images'],
                ['name' => 'Storage Diagnostics', 'level' => 'Expert', 'type' => 'Diagnostic', 'badge' => 'CrystalDiskInfo & Sentinel'],
            ],
        ],
        'it_services' => [
            'category' => 'IT Services & Field Support',
            'icon' => 'wrench',
            'items' => [
                ['name' => 'PC / Laptop Maintenance', 'level' => 'Expert', 'type' => 'Service', 'badge' => 'Hardware Overhaul'],
                ['name' => 'Printer Diagnostics', 'level' => 'Advanced', 'type' => 'Service', 'badge' => 'Laser & Inkjet'],
                ['name' => 'CCTV Camera Setup', 'level' => 'Advanced', 'type' => 'Service', 'badge' => 'IP & DVR Deployments'],
                ['name' => 'APC UPS Power Protection', 'level' => 'Advanced', 'type' => 'Infrastructure', 'badge' => 'Power Conditioning'],
                ['name' => 'CMOS Diagnostics', 'level' => 'Expert', 'type' => 'Support', 'badge' => 'BIOS / Battery Level'],
            ],
        ],
        'workflows' => [
            'category' => 'Workflows, Standards & Gaming',
            'icon' => 'gamepad',
            'items' => [
                ['name' => 'Git & GitHub', 'level' => 'Advanced', 'type' => 'Workflow', 'badge' => 'VCS & Release Ops'],
                ['name' => 'Markdown Docs', 'level' => 'Expert', 'type' => 'Documentation', 'badge' => 'Technical Specs'],
                ['name' => 'IT Ethics & Cybercrime Law', 'level' => 'Certified', 'type' => 'Compliance', 'badge' => 'RA 10175 Knowledge'],
                ['name' => 'GPU Graphics Tuning', 'level' => 'Expert', 'type' => 'Gaming', 'badge' => 'Low-level Latency/FPS'],
                ['name' => 'Excel & Data Analysis', 'level' => 'Proficient', 'type' => 'Productivity', 'badge' => 'Spreadsheets'],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Education History
    |--------------------------------------------------------------------------
    */
    'education' => [
        [
            'level' => 'Tertiary',
            'badge' => 'College',
            'degree' => 'Bachelor of Science in Information Technology (BSIT)',
            'institution' => 'University of Eastern Pangasinan',
            'period' => '2023 - 2027 (Expected)',
            'notes' => 'Capstone Team Leader for LibraGuard. Specializing in systems integration, network engineering, and IoT embedded solutions.',
            'current' => true,
        ],
        [
            'level' => 'Secondary',
            'badge' => 'Senior High School',
            'degree' => 'Technical Vocational Livelihood - Information and Communication Technology (TVL-ICT)',
            'institution' => 'Sison Central Integrated School',
            'period' => '2021 - 2022',
            'notes' => 'Focused on hardware servicing, foundational computer networking, and basic software logic.',
            'current' => false,
        ],
        [
            'level' => 'Secondary',
            'badge' => 'Junior High School',
            'degree' => 'Junior High School Diploma',
            'institution' => 'Sison Central Integrated School',
            'period' => '2017 - 2021',
            'notes' => 'Early interest in computers, electrical circuitry, and systems mechanics.',
            'current' => false,
        ],
        [
            'level' => 'Primary',
            'badge' => 'Elementary School',
            'degree' => 'Elementary Education',
            'institution' => 'Artacho National School',
            'period' => '2011 - 2017',
            'notes' => 'Primary educational foundation.',
            'current' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Certifications & Credentials
    |--------------------------------------------------------------------------
    */
    'certifications' => [
        [
            'title' => 'Ethical Hacker',
            'issuer' => 'Cisco Networking Academy',
            'date' => 'October 16, 2026',
            'badge' => 'Security',
            'icon' => 'shield-check',
            'desc' => 'Threat modeling, vulnerability assessment, penetration testing fundamentals, and ethical disclosure workflows.',
        ],
        [
            'title' => 'Introduction to Cybersecurity',
            'issuer' => 'Cisco Networking Academy',
            'date' => 'October 16, 2026',
            'badge' => 'Network Security',
            'icon' => 'lock',
            'desc' => 'Foundations of network defense, data integrity principles, threat mitigation, and cyber defense best practices.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Beyond Code: Visual Story & Interests
    |--------------------------------------------------------------------------
    */
    'lifestyle' => [
        [
            'title' => 'Under the Ambient Canopy',
            'caption' => 'Taking a break from the terminal beneath glowing night tree lights.',
            'image' => 'images/night-lights.jpg',
            'tag' => 'Night Life & Reflection',
        ],
        [
            'title' => 'Vistas Across the Greens',
            'caption' => 'Connecting with the rolling hills and panoramic landscapes of Pangasinan.',
            'image' => 'images/landscape.jpg',
            'tag' => 'Scenic Outdoors',
        ],
        [
            'title' => 'Shared Moments & Community',
            'caption' => 'Memories and shared smiles with close companions.',
            'image' => 'images/carl-selfie.jpg',
            'tag' => 'Moments',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Gaming Titles & Communities
    |--------------------------------------------------------------------------
    */
    'gaming' => [
        ['name' => 'Valorant', 'category' => 'Tactical FPS', 'role' => 'Competitive Shooter'],
        ['name' => 'Genshin Impact', 'category' => 'Open-World ARPG', 'role' => 'Exploration & Strategy'],
        ['name' => 'Zenless Zone Zero', 'category' => 'Action RPG', 'role' => 'Fast-paced Combat'],
        ['name' => 'Minecraft', 'category' => 'Sandbox & Server Ops', 'role' => 'Self-Hosted Node & World Crafting'],
        ['name' => 'Counter-Strike: GO', 'category' => 'Tactical Shooter', 'role' => 'Precision Aim & Comms'],
        ['name' => 'Arknights & Endfield', 'category' => 'Tactical Tower Defense', 'role' => 'Tactical Planning'],
        ['name' => 'Roblox', 'category' => 'Community Games', 'role' => 'Pet Simulator X & Casual Play'],
    ],
];
