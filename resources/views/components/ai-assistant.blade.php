{{-- AI Assistant Widget --}}
<div id="ai-assistant" class="fixed bottom-6 right-6 z-40 font-body">
    {{-- Chat Container --}}
    <div id="chatContainer" 
         class="hidden flex flex-col bg-white rounded-2xl shadow-2xl w-96 max-h-[600px] border border-gray-100 overflow-hidden">
        
        {{-- Chat Header --}}
        <div class="bg-gradient-to-r from-secondary to-accent p-4 flex items-center justify-between">
            <div>
                <h3 class="font-heading font-bold text-white text-lg">Shilmi AI Assistant</h3>
                <p class="text-background/80 text-xs">Always here to help!</p>
            </div>
            <button onclick="toggleChat()" class="text-white hover:bg-white/20 p-2 rounded-lg transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        {{-- Messages Area --}}
        <div id="messagesArea" class="flex-1 overflow-y-auto p-4 bg-gray-50 space-y-3 max-h-[400px]">
            {{-- Welcome Message --}}
            <div class="flex gap-3">
                <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
                    </svg>
                </div>
                <div class="bg-white rounded-2xl rounded-tl-none p-3 text-sm text-gray-700 max-w-xs shadow-sm">
                    <p>Hai! 👋 Saya adalah AI Assistant Shilmi. Tanyakan apa saja tentang portfolio, skills, atau pengalaman Shilmi!</p>
                </div>
            </div>
        </div>

        {{-- Input Area --}}
        <div class="border-t border-gray-100 p-4 bg-white">
            <div class="flex gap-2">
                <input 
                    type="text" 
                    id="userInput" 
                    placeholder="Ketik pertanyaanmu..." 
                    class="flex-1 bg-gray-100 border border-gray-200 rounded-full px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent"
                    onkeypress="if(event.key === 'Enter') sendMessage()">
                <button 
                    onclick="sendMessage()"
                    class="bg-secondary hover:bg-secondary/90 text-white rounded-full p-2 transition-all hover:scale-105">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5.951-1.429 5.951 1.429a1 1 0 001.169-1.409l-7-14z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Chat Toggle Button --}}
    <button 
        id="chatBtn"
        onclick="toggleChat()"
        class="bg-secondary hover:bg-secondary/90 text-white rounded-full p-4 shadow-lg hover:shadow-2xl transition-all hover:scale-110 flex items-center justify-center w-16 h-16 font-heading font-bold text-xl">
        <span id="btnIcon">💬</span>
    </button>
</div>

{{-- AI Assistant Script --}}
<script>
    let userMessageCount = 0; // Track user messages
    
    const aiResponses = {
        default: "Maaf, saya masih belajar. Coba tanyakan tentang portfolio, skills, atau pengalaman Shilmi!",
        greeting: ["Hai! 👋", "Halo! 😊", "Selamat datang! 🎉"],
        portfolio: "Shilmi memiliki berbagai portfolio yang mencakup video, design, dan photography. Kunjungi halaman Portfolio untuk melihat detailnya!",
        skills: "Shilmi memiliki skills dalam videography, photography, design, dan content creation. Lihat halaman About untuk detail lengkapnya!",
        education: "Shilmi sedang menempuh pendidikan. Kunjungi halaman Education untuk informasi lengkap tentang riwayat pendidikan Shilmi!",
        experience: "Shilmi memiliki berbagai pengalaman dalam industri kreatif. Lihat halaman Experience untuk detail pengalaman Shilmi!",
        gallery: "Galeri Shilmi menampilkan karya-karya photography dan videography. Kunjungi halaman Gallery untuk melihatnya!",
        contact: "Ingin menghubungi Shilmi? Kunjungi halaman Contact untuk berbagai cara menghubungi!",
        achievement: "Shilmi memiliki berbagai achievement dan prestasi. Lihat halaman Achievement untuk detail lengkapnya!",
        instagram: "Kamu bisa follow Instagram Shilmi untuk update konten terbaru!",
        behance: "Portfolio design Shilmi tersedia di Behance!",
        moreInfo: "Untuk informasi lebih lanjut, silahkan cek di <a href='/contact' class='text-secondary font-semibold hover:underline'>halaman Contact</a> 😊",
    };

    function toggleChat() {
        const chatContainer = document.getElementById('chatContainer');
        const chatBtn = document.getElementById('chatBtn');
        const btnIcon = document.getElementById('btnIcon');
        
        chatContainer.classList.toggle('hidden');
        if (chatContainer.classList.contains('hidden')) {
            btnIcon.textContent = '💬';
        } else {
            btnIcon.textContent = '×';
            document.getElementById('userInput').focus();
        }
    }

    function sendMessage() {
        const input = document.getElementById('userInput');
        const message = input.value.trim();
        
        if (!message) return;

        // Add user message
        addMessage(message, 'user');
        input.value = '';
        userMessageCount++; // Increment message count

        // Simulate AI response delay
        setTimeout(() => {
            const response = getAIResponse(message, userMessageCount);
            addMessage(response, 'ai');
        }, 300);
    }

    function addMessage(text, sender) {
        const messagesArea = document.getElementById('messagesArea');
        
        if (sender === 'user') {
            const userMsg = document.createElement('div');
            userMsg.className = 'flex gap-3 justify-end';
            userMsg.innerHTML = `
                <div class="bg-secondary text-white rounded-2xl rounded-tr-none p-3 text-sm max-w-xs shadow-sm">
                    <p>${escapeHtml(text)}</p>
                </div>
                <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center flex-shrink-0">
                    <span class="text-sm">👤</span>
                </div>
            `;
            messagesArea.appendChild(userMsg);
        } else {
            const aiMsg = document.createElement('div');
            aiMsg.className = 'flex gap-3';
            aiMsg.innerHTML = `
                <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
                    </svg>
                </div>
                <div class="bg-white rounded-2xl rounded-tl-none p-3 text-sm text-gray-700 max-w-xs shadow-sm">
                    <p>${text}</p>
                </div>
            `;
            messagesArea.appendChild(aiMsg);
        }

        // Scroll to bottom
        messagesArea.scrollTop = messagesArea.scrollHeight;
    }

    function getAIResponse(message, messageCount) {
        // If second message (messageCount == 2), give contact info response
        if (messageCount === 2) {
            return aiResponses.moreInfo;
        }

        const lowerMessage = message.toLowerCase();

        if (lowerMessage.includes('halo') || lowerMessage.includes('hi') || lowerMessage.includes('hey')) {
            return aiResponses.greeting[Math.floor(Math.random() * aiResponses.greeting.length)];
        }
        if (lowerMessage.includes('portfolio')) {
            return aiResponses.portfolio;
        }
        if (lowerMessage.includes('skill') || lowerMessage.includes('kemampuan') || lowerMessage.includes('ability')) {
            return aiResponses.skills;
        }
        if (lowerMessage.includes('pendidikan') || lowerMessage.includes('education') || lowerMessage.includes('sekolah')) {
            return aiResponses.education;
        }
        if (lowerMessage.includes('pengalaman') || lowerMessage.includes('experience') || lowerMessage.includes('kerja')) {
            return aiResponses.experience;
        }
        if (lowerMessage.includes('galeri') || lowerMessage.includes('gallery') || lowerMessage.includes('foto')) {
            return aiResponses.gallery;
        }
        if (lowerMessage.includes('kontak') || lowerMessage.includes('contact') || lowerMessage.includes('hubungi')) {
            return aiResponses.contact;
        }
        if (lowerMessage.includes('achievement') || lowerMessage.includes('prestasi') || lowerMessage.includes('penghargaan')) {
            return aiResponses.achievement;
        }
        if (lowerMessage.includes('instagram')) {
            return aiResponses.instagram;
        }
        if (lowerMessage.includes('behance')) {
            return aiResponses.behance;
        }

        return aiResponses.default;
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // Close chat when clicking outside (optional)
    document.addEventListener('click', function(event) {
        const assistant = document.getElementById('ai-assistant');
        const isClickInside = assistant.contains(event.target);
        
        if (!isClickInside) {
            document.getElementById('chatContainer').classList.add('hidden');
            document.getElementById('btnIcon').textContent = '💬';
        }
    });
</script>
