@extends('layouts.app')

@section('title', 'Home — My Portfolio')

@section('content')

    {{-- ===== HERO SECTION ===== --}}
    <section class="min-h-screen px-6 flex items-center">
        <div class="max-w-6xl mx-auto w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center py-16">

                {{-- Teks Hero --}}
                <div data-aos="fade-right">
                    {{-- Badge --}}
                    <div class="inline-flex items-center gap-2 bg-accent/20 border border-accent/30 rounded-full px-4 py-1.5 mb-6">
                        <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                        <span class="text-secondary text-sm font-medium">Available for opportunities</span>
                    </div>

                    {{-- Headline --}}
                    <h1 class="font-heading font-bold text-5xl md:text-6xl lg:text-7xl text-dark leading-tight mb-6">
                        Creative
                        <span class="text-secondary relative">
                            Storyteller
                            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 200 12" fill="none">
                                <path d="M2 8 Q50 2, 100 6 Q150 10, 198 4" stroke="#F3CA52" stroke-width="3" stroke-linecap="round" fill="none"/>
                            </svg>
                        </span>
                        <br>& Maker.
                    </h1>

                    {{-- Subheadline --}}
                    <p class="text-dark/60 text-lg md:text-xl leading-relaxed mb-8 max-w-lg">
                        D3 Multimedia & Broadcasting student with a passion for visual communication,
                        digital content creation, and modern design.
                    </p>

                    {{-- CTA Buttons --}}
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('portfolio') }}"
                           class="px-8 py-4 bg-secondary text-background font-semibold rounded-2xl hover:bg-secondary/90 transition-all duration-200 hover:scale-105 hover:shadow-lg">
                            See My Work ↗
                        </a>
                        <a href="{{ route('contact') }}"
                           class="px-8 py-4 bg-white/50 backdrop-blur text-dark font-semibold rounded-2xl border border-dark/10 hover:bg-white/70 transition-all duration-200 hover:scale-105">
                            Get in Touch
                        </a>
                    </div>
                </div>

                {{-- Avatar / Visual Hero --}}
                <div class="flex justify-center lg:justify-end" data-aos="fade-left" data-aos-delay="150">
                    <div class="relative">
                        <div class="w-72 h-72 md:w-96 md:h-96 relative">

                            <div class="absolute inset-0 bg-primary rounded-[60%_40%_30%_70%/60%_30%_70%_40%] overflow-hidden">
                                {{-- Interactive 3D profile model --}}
                                <div id="heroModelStage"
                                     class="absolute inset-0 cursor-grab active:cursor-grabbing">
                                    <canvas id="heroModelCanvas"
                                            class="block w-full h-full"
                                            aria-label="Interactive 3D profile model"></canvas>
                                    <div id="heroModelLoading"
                                         class="absolute inset-0 flex items-center justify-center bg-primary text-secondary text-sm font-semibold transition-opacity duration-300">
                                        Loading 3D...
                                    </div>
                                </div>
                            </div>

                            {{-- Floating badges --}}
                            <div class="hidden sm:block absolute -top-4 -right-4 bg-white rounded-2xl px-4 py-2 shadow-lg pointer-events-none">
                                <p class="text-xs text-dark/50 font-medium">Currently studying</p>
                                <p class="text-sm font-bold text-secondary">Multimedia</p>
                            </div>

                            <div class="hidden sm:block absolute -bottom-2 -left-4 bg-secondary rounded-2xl px-4 py-2 shadow-lg pointer-events-none">
                                <p class="text-background/60 text-xs">Semester</p>
                                <p class="text-primary font-bold text-lg">04</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== BENTO GRID NAVIGATION ===== --}}
    <section class="px-6 pb-20">
        <div class="max-w-6xl mx-auto">

            {{-- Section Label --}}
            <div class="flex items-center gap-3 mb-8" data-aos="fade-up">
                <div class="w-8 h-0.5 bg-secondary"></div>
                <p class="text-secondary text-sm font-semibold uppercase tracking-widest">Explore</p>
            </div>

            {{-- Bento Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 auto-rows-[180px]">

                {{-- Card: Education (large) --}}
                <a href="{{ route('education') }}"
                   class="col-span-2 row-span-1 bg-secondary rounded-3xl p-6 flex flex-col justify-between group hover:scale-[1.02] transition-all duration-300 cursor-pointer"
                   data-aos="fade-up" data-aos-delay="0">
                    <div class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center">
                        <span class="text-xl">🎓</span>
                    </div>
                    <div>
                        <p class="text-background/50 text-xs font-medium uppercase tracking-wider mb-1">Academic</p>
                        <h3 class="font-heading font-bold text-xl text-background">Education</h3>
                        <p class="text-background/40 text-xs mt-1">My learning journey →</p>
                    </div>
                </a>

                {{-- Card: Achievement --}}
                <a href="{{ route('achievement') }}"
                   class="col-span-2 row-span-1 bg-primary rounded-3xl p-6 flex flex-col justify-between group hover:scale-[1.02] transition-all duration-300 cursor-pointer"
                   data-aos="fade-up" data-aos-delay="50">
                    <div class="w-10 h-10 bg-dark/10 rounded-xl flex items-center justify-center">
                        <span class="text-xl">🏆</span>
                    </div>
                    <div>
                        <p class="text-dark/40 text-xs font-medium uppercase tracking-wider mb-1">Awards</p>
                        <h3 class="font-heading font-bold text-xl text-dark">Achievement</h3>
                        <p class="text-dark/40 text-xs mt-1">Things I'm proud of →</p>
                    </div>
                </a>

                {{-- Card: Gallery (portrait) --}}
                <a href="{{ route('gallery') }}"
                   class="col-span-2 row-span-2 bg-accent rounded-3xl p-6 flex flex-col justify-between group hover:scale-[1.02] transition-all duration-300 cursor-pointer"
                   data-aos="fade-up" data-aos-delay="100">
                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                        <span class="text-xl">📸</span>
                    </div>
                    <div>
                        {{-- Placeholder image grid --}}
                        <div class="grid grid-cols-2 gap-2 mb-4">
                            <div class="h-16 bg-white/20 rounded-xl"></div>
                            <div class="h-16 bg-white/20 rounded-xl"></div>
                            <div class="h-16 bg-white/20 rounded-xl"></div>
                            <div class="h-16 bg-white/20 rounded-xl"></div>
                        </div>
                        <p class="text-white/60 text-xs font-medium uppercase tracking-wider mb-1">Visual</p>
                        <h3 class="font-heading font-bold text-xl text-white">Gallery</h3>
                        <p class="text-white/50 text-xs mt-1">Captured moments →</p>
                    </div>
                </a>

                {{-- Card: Portfolio (wide) --}}
                <a href="{{ route('portfolio') }}"
                   class="col-span-2 md:col-span-2 row-span-1 bg-dark rounded-3xl p-6 flex flex-col justify-between group hover:scale-[1.02] transition-all duration-300 cursor-pointer"
                   data-aos="fade-up" data-aos-delay="150">
                    <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center">
                        <span class="text-xl">✦</span>
                    </div>
                    <div>
                        <p class="text-white/30 text-xs font-medium uppercase tracking-wider mb-1">Works</p>
                        <h3 class="font-heading font-bold text-xl text-white">Portfolio</h3>
                        <p class="text-white/30 text-xs mt-1">Selected projects →</p>
                    </div>
                </a>

                {{-- Card: Experience --}}
                <a href="{{ route('experience') }}"
                   class="col-span-2 row-span-1 bg-white/40 backdrop-blur border border-white/60 rounded-3xl p-6 flex flex-col justify-between group hover:scale-[1.02] hover:bg-white/60 transition-all duration-300 cursor-pointer"
                   data-aos="fade-up" data-aos-delay="200">
                    <div class="w-10 h-10 bg-secondary/10 rounded-xl flex items-center justify-center">
                        <span class="text-xl">💼</span>
                    </div>
                    <div>
                        <p class="text-dark/40 text-xs font-medium uppercase tracking-wider mb-1">Career</p>
                        <h3 class="font-heading font-bold text-xl text-dark">Experience</h3>
                        <p class="text-dark/40 text-xs mt-1">Where I've worked →</p>
                    </div>
                </a>

                {{-- Card: Contact (wide, accent) --}}
                <a href="{{ route('contact') }}"
                   class="col-span-2 md:col-span-4 row-span-1 bg-secondary/10 border-2 border-secondary/20 rounded-3xl p-6 flex items-center justify-between group hover:scale-[1.02] hover:border-secondary/40 transition-all duration-300 cursor-pointer"
                   data-aos="fade-up" data-aos-delay="250">
                    <div>
                        <p class="text-secondary/60 text-xs font-medium uppercase tracking-wider mb-1">Let's talk</p>
                        <h3 class="font-heading font-bold text-2xl text-secondary">Get in Touch 👋</h3>
                        <p class="text-dark/40 text-sm mt-1">Open for collaborations & projects</p>
                    </div>
                    <div class="w-14 h-14 bg-secondary rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform shrink-0">
                        <span class="text-background text-2xl">→</span>
                    </div>
                </a>

            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script type="importmap">
{
    "imports": {
        "three": "https://unpkg.com/three@0.160.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.160.0/examples/jsm/"
    }
}
</script>
<script type="module">
    import * as THREE from 'three';
    import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
    import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

    const stage = document.getElementById('heroModelStage');
    const canvas = document.getElementById('heroModelCanvas');
    const loading = document.getElementById('heroModelLoading');
    const modelUrl = @json(asset('models/shilmi-profile.glb'));

    if (stage && canvas) {
        const scene = new THREE.Scene();
        const renderer = new THREE.WebGLRenderer({
            canvas,
            alpha: true,
            antialias: true,
            powerPreference: 'high-performance',
        });

        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        renderer.outputColorSpace = THREE.SRGBColorSpace;
        renderer.toneMapping = THREE.ACESFilmicToneMapping;
        renderer.toneMappingExposure = 1.1;

        const camera = new THREE.PerspectiveCamera(34, 1, 0.1, 100);
        camera.position.set(0, 0.18, 4.4);

        const controls = new OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.enablePan = false;
        controls.enableZoom = false;
        controls.rotateSpeed = 0.85;
        controls.autoRotate = true;
        controls.autoRotateSpeed = 0.6;
        controls.minPolarAngle = Math.PI * 0.43;
        controls.maxPolarAngle = Math.PI * 0.57;

        const ambientLight = new THREE.HemisphereLight(0xffffff, 0x0a6847, 2.2);
        scene.add(ambientLight);

        const keyLight = new THREE.DirectionalLight(0xffffff, 2.4);
        keyLight.position.set(3, 5, 4);
        scene.add(keyLight);

        const fillLight = new THREE.DirectionalLight(0xf3ca52, 1.4);
        fillLight.position.set(-4, 2, 2);
        scene.add(fillLight);

        const loader = new GLTFLoader();
        loader.load(
            modelUrl,
            (gltf) => {
                const model = gltf.scene;
                const box = new THREE.Box3().setFromObject(model);
                const size = box.getSize(new THREE.Vector3());
                const center = box.getCenter(new THREE.Vector3());
                const maxDimension = Math.max(size.x, size.y, size.z);

                model.position.sub(center);
                model.position.y -= 0.32;
                model.scale.setScalar(2.05 / maxDimension);
                model.rotation.y = Math.PI * 0.12;

                scene.add(model);
                controls.target.set(0, -0.05, 0);

                if (loading) {
                    loading.style.opacity = '0';
                    loading.style.pointerEvents = 'none';
                    window.setTimeout(() => {
                        loading.hidden = true;
                    }, 300);
                }
            },
            undefined,
            () => {
                if (loading) {
                    loading.textContent = '3D model could not be loaded.';
                }
            }
        );

        const resizeRenderer = () => {
            const { width, height } = stage.getBoundingClientRect();
            renderer.setSize(width, height, false);
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
        };

        new ResizeObserver(resizeRenderer).observe(stage);
        resizeRenderer();

        const animate = () => {
            requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        };

        animate();
    }
</script>
@endsection
