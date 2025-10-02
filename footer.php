    </div><!-- #page -->

    <footer class="bg-teal text-white py-12 px-4">
        <div class="container mx-auto text-center">
            <div class="mb-6">
                <h3 class="text-2xl font-bold mb-2">Método MASD</h3>
                <p class="opacity-90">Supere o Medo de Dirigir e Conquiste sua Liberdade</p>
            </div>
            
            <div class="mb-6">
                <a href="<?php echo esc_url(masd_get_purchase_link()); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-gold text-teal font-bold px-8 py-4 rounded-lg hover:opacity-90 transition-all">
                    Começar Agora
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
            </div>
            
            <div class="border-t border-white/20 pt-6 mt-6">
                <p class="text-sm opacity-75">
                    © <?php echo date('Y'); ?> Método MASD - Márcia Mattos. Todos os direitos reservados.
                </p>
                <p class="text-xs opacity-60 mt-2">
                    Psicóloga Clínica Especialista em Ansiedade e Medos
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    <!-- Inicializar Lucide Icons -->
    <script>
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    </script>
</body>
</html>
