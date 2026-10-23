# Carl Emmanuel O. Rabanillo — IT & IoT Specialist Portfolio

A full-stack Laravel 12 portfolio showcasing systems engineering, IoT embedded microcontrollers, and homelab infrastructure.

![Portfolio Preview](public/images/libraguard-seal.png)

## Tech Stack
- **Backend**: Laravel 12 (PHP 8.2+)
- **Styling**: Modern Cyber-Homelab Vanilla CSS Design System (Dark/Light mode support)
- **Frontend / Scripts**: Vanilla JavaScript (Interactive telemetry, skill filtering, lightbox, copy-to-clipboard, smooth scroll spy)
- **Database**: SQLite (Ready for PostgreSQL / MySQL)

## Features Included
1. **Interactive Hero & Homelab Rack Simulator**:
   - Live simulated/connected telemetry from Proxmox VE node (`CT 100 Nextcloud`, `CT 102 Minecraft PaperMC+Geyser`, `CT 103 Cloudflare Zero Trust Tunnel`, `CT 104 Pi-hole`, `CT 105 Tailscale`).
   - Pulsing multi-colored LEDs and live metrics (CPU, RAM, Temp, Uptime).
2. **Flagship Capstone: LibraGuard**:
   - Official 3D seal asset presentation.
   - Detailed architectural breakdown across **IoT Hardware**, **Web Stack**, and **Flutter Mobile App**.
   - Direct links to the live system and GitHub repository.
3. **Projects Showcase**:
   - Bare-metal Dell OptiPlex Proxmox VE homelab, Cross-platform Minecraft node, Hybrid JNI/Electron native bridge, and UFO Blender 3D scene.
4. **Field & Hardware Technical Services**:
   - PC & Desktop Maintenance, Printer Diagnostics, and CCTV Security Installation.
5. **Interactive Skill Matrix**:
   - Category filtering (Software & Code, Hardware & IoT, Systems & Network, Field Services, Workflows & Gaming) plus real-time live search.
6. **Academic Milestones & Cisco Certifications**:
   - Education timeline (Tertiary BSIT, Senior High TVL-ICT, Junior High, Primary).
   - Cisco Networking Academy certificates (Ethical Hacker & Introduction to Cybersecurity).
7. **Beyond Code Photo Showcase**:
   - High-resolution interactive lightbox featuring ambient night photography, scenic rolling green hills, and community moments.
8. **Contact Center & Validation**:
   - One-click copy for Smart and TNT mobile numbers, Discord tag, and email.
   - Working contact form with Laravel validation and database logging (`contact_messages` table).

## How to Modify Your Portfolio Data
All portfolio data is cleanly decoupled into:
```
config/portfolio.php
```
You can edit projects, skills, education, contact numbers, or social links directly in `config/portfolio.php` without altering Blade views.

## Running Locally
```bash
# Start the local development server
php artisan serve

# Then open in your browser
http://127.0.0.1:8000
```
