// SEO Enhancement JavaScript
// Améliore l'engagement utilisateur et les métriques SEO

document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Smooth Scrolling pour les liens internes
    initSmoothScrolling();
    
    // 2. Scroll to Top Button
    initScrollToTop();
    
    // 3. Reading Progress Bar
    initReadingProgress();
    
    // 4. Time on Page Tracking
    trackTimeOnPage();
    
    // 5. Interactive Elements (clicks, hovers)
    trackUserEngagement();
    
    // 6. Lazy Loading pour les images
    initLazyLoading();
    
    // 7. Table of Contents Auto-highlight
    initTOCHighlight();
    
    // 8. Read Time Calculator
    calculateReadTime();
    
    // 9. Copy to Clipboard pour les exemples de code
    initCopyToClipboard();
    
    // 10. External Links - Open in new tab
    initExternalLinks();
});

// 1. Smooth Scrolling
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Update URL without jumping
                    history.pushState(null, null, href);
                }
            }
        });
    });
}

// 2. Scroll to Top Button
function initScrollToTop() {
    // Create button
    const scrollBtn = document.createElement('button');
    scrollBtn.id = 'scrollToTop';
    scrollBtn.innerHTML = '↑';
    scrollBtn.setAttribute('aria-label', 'Retour en haut');
    scrollBtn.className = 'fixed bottom-8 right-8 bg-blue-600 text-white w-12 h-12 rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 opacity-0 pointer-events-none z-50 flex items-center justify-center text-2xl font-bold';
    document.body.appendChild(scrollBtn);
    
    // Show/hide on scroll
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        clearTimeout(scrollTimeout);
        
        if (window.pageYOffset > 300) {
            scrollBtn.classList.remove('opacity-0', 'pointer-events-none');
            scrollBtn.classList.add('opacity-100', 'pointer-events-auto');
        } else {
            scrollBtn.classList.add('opacity-0', 'pointer-events-none');
            scrollBtn.classList.remove('opacity-100', 'pointer-events-auto');
        }
    });
    
    // Click handler
    scrollBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// 3. Reading Progress Bar
function initReadingProgress() {
    const progressBar = document.createElement('div');
    progressBar.id = 'readingProgress';
    progressBar.className = 'fixed top-0 left-0 h-1 bg-yellow-400 z-50 transition-all duration-150';
    progressBar.style.width = '0%';
    document.body.appendChild(progressBar);
    
    window.addEventListener('scroll', function() {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight - windowHeight;
        const scrolled = window.pageYOffset;
        const progress = (scrolled / documentHeight) * 100;
        progressBar.style.width = progress + '%';
    });
}

// 4. Track Time on Page (pour les métriques d'engagement)
function trackTimeOnPage() {
    let startTime = Date.now();
    let isActive = true;
    
    // Détection si l'utilisateur est actif
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            isActive = false;
        } else {
            isActive = true;
            startTime = Date.now();
        }
    });
    
    // Log le temps passé toutes les 30 secondes
    setInterval(function() {
        if (isActive) {
            const timeSpent = Math.floor((Date.now() - startTime) / 1000);
            console.log('Temps sur la page:', timeSpent, 'secondes');
            // Ici vous pourriez envoyer les données à Google Analytics
            // gtag('event', 'timing_complete', {'name': 'page_read', 'value': timeSpent});
        }
    }, 30000);
}

// 5. Track User Engagement
function trackUserEngagement() {
    let clicks = 0;
    let scrollDepth = 0;
    
    document.addEventListener('click', function(e) {
        clicks++;
        console.log('Engagement clicks:', clicks);
    });
    
    window.addEventListener('scroll', function() {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight - windowHeight;
        const scrolled = window.pageYOffset;
        const currentDepth = Math.floor((scrolled / documentHeight) * 100);
        
        if (currentDepth > scrollDepth) {
            scrollDepth = currentDepth;
            
            // Milestones: 25%, 50%, 75%, 100%
            if (scrollDepth >= 25 && scrollDepth < 50) {
                console.log('Scroll depth: 25%');
            } else if (scrollDepth >= 50 && scrollDepth < 75) {
                console.log('Scroll depth: 50%');
            } else if (scrollDepth >= 75 && scrollDepth < 100) {
                console.log('Scroll depth: 75%');
            } else if (scrollDepth >= 100) {
                console.log('Scroll depth: 100%');
            }
        }
    });
}

// 6. Lazy Loading pour images
function initLazyLoading() {
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    }
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
}

// 7. Table of Contents Auto-highlight
function initTOCHighlight() {
    const sections = document.querySelectorAll('section[id], div[id], h2[id], h3[id]');
    
    if (sections.length === 0) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                if (id) {
                    // Enlever la classe active de tous les liens
                    document.querySelectorAll('a[href^="#"]').forEach(link => {
                        link.classList.remove('active');
                    });
                    
                    // Ajouter la classe active au lien correspondant
                    const activeLink = document.querySelector(`a[href="#${id}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            }
        });
    }, {
        threshold: 0.5
    });
    
    sections.forEach(section => observer.observe(section));
}

// 8. Calculate Read Time (uniquement pour les articles de blog)
function calculateReadTime() {
    // Vérifier si on est sur une page d'article de blog
    const isArticlePage = window.location.pathname.startsWith('/blog/') && 
                         window.location.pathname !== '/blog' &&
                         window.location.pathname !== '/blog/';
    
    if (!isArticlePage) return;
    
    const article = document.querySelector('article');
    if (!article) return;
    
    const text = article.textContent || article.innerText;
    const wordCount = text.trim().split(/\s+/).length;
    const readingTime = Math.ceil(wordCount / 200); // 200 mots par minute
    
    // Créer un élément pour afficher le temps de lecture
    const readTimeElement = document.createElement('div');
    readTimeElement.className = 'read-time bg-blue-100 text-blue-800 px-4 py-2 rounded-lg inline-block mb-4 font-semibold';
    readTimeElement.innerHTML = `📖 Temps de lecture : ${readingTime} min • ${wordCount} mots`;
    
    // Insérer après le titre principal
    const mainTitle = document.querySelector('h1');
    if (mainTitle && mainTitle.parentNode) {
        mainTitle.parentNode.insertBefore(readTimeElement, mainTitle.nextSibling);
    }
}

// 9. Copy to Clipboard pour exemples de code
function initCopyToClipboard() {
    const codeBlocks = document.querySelectorAll('pre code, .code-example');
    
    codeBlocks.forEach(block => {
        const wrapper = document.createElement('div');
        wrapper.className = 'relative code-wrapper';
        block.parentNode.insertBefore(wrapper, block);
        wrapper.appendChild(block);
        
        const copyBtn = document.createElement('button');
        copyBtn.className = 'absolute top-2 right-2 bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700 transition';
        copyBtn.textContent = 'Copier';
        copyBtn.setAttribute('aria-label', 'Copier le code');
        
        copyBtn.addEventListener('click', function() {
            const code = block.textContent;
            navigator.clipboard.writeText(code).then(() => {
                copyBtn.textContent = '✓ Copié !';
                copyBtn.classList.add('bg-green-600');
                setTimeout(() => {
                    copyBtn.textContent = 'Copier';
                    copyBtn.classList.remove('bg-green-600');
                }, 2000);
            });
        });
        
        wrapper.appendChild(copyBtn);
    });
}

// 10. External Links - Open in new tab
function initExternalLinks() {
    const links = document.querySelectorAll('a[href^="http"]');
    
    links.forEach(link => {
        const url = new URL(link.href);
        if (url.hostname !== window.location.hostname) {
            link.setAttribute('target', '_blank');
            link.setAttribute('rel', 'noopener noreferrer');
            
            // Ajouter une icône visuelle
            if (!link.querySelector('.external-icon')) {
                const icon = document.createElement('span');
                icon.className = 'external-icon ml-1 text-xs';
                icon.innerHTML = '↗';
                link.appendChild(icon);
            }
        }
    });
}

// Keyboard Navigation Enhancement
document.addEventListener('keydown', function(e) {
    // ESC pour fermer le menu mobile
    if (e.key === 'Escape') {
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenu && mobileMenu.classList.contains('block')) {
            mobileMenu.classList.remove('block');
            mobileMenu.classList.add('hidden');
        }
    }
    
    // Ctrl/Cmd + K pour focus sur la recherche (si on en ajoute une)
    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
        e.preventDefault();
        const searchInput = document.querySelector('input[type="search"]');
        if (searchInput) {
            searchInput.focus();
        }
    }
});

// Performance: Préchargement des pages importantes
function preloadImportantPages() {
    const importantLinks = [
        '/guides',
        '/blog',
        '/tutorials'
    ];
    
    importantLinks.forEach(url => {
        const link = document.createElement('link');
        link.rel = 'prefetch';
        link.href = url;
        document.head.appendChild(link);
    });
}

// Exécuter le préchargement après 3 secondes
setTimeout(preloadImportantPages, 3000);

// Service Worker pour cache (PWA)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        // Décommenter pour activer le service worker
        // navigator.serviceWorker.register('/service-worker.js');
    });
}

console.log('🚀 SEO Enhancements chargés avec succès !');
