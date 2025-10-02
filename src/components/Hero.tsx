import { Button } from "@/components/ui/button";
import { Check, ArrowRight } from "lucide-react";

export const Hero = () => {
  return (
    <section className="min-h-screen flex flex-col items-center justify-center px-4 py-20 bg-gradient-to-b from-white to-secondary">
      <div className="max-w-5xl mx-auto text-center space-y-8">
        <div className="inline-block">
          <span className="bg-gold/10 text-gold px-6 py-2 rounded-full text-sm font-medium border border-gold/20">
            Método Psicológico Comprovado
          </span>
        </div>

        <h1 className="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight">
          Supere o <span className="text-gold">medo de dirigir</span> e conquiste sua{" "}
          <span className="text-teal">liberdade no volante</span>
        </h1>

        <p className="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto">
          Método psicológico exclusivo criado pela psicóloga clínica{" "}
          <span className="font-semibold text-foreground">Márcia Mattos</span>. 100% online,
          acessível e transformador.
        </p>

        <div className="flex flex-col items-center gap-6">
          <Button size="lg" className="bg-gold hover:bg-gold/90 text-teal font-bold text-lg px-8 py-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
            Quero vencer o medo de dirigir agora
            <ArrowRight className="ml-2 h-5 w-5" />
          </Button>

          <div className="flex flex-wrap items-center justify-center gap-6 text-sm">
            <div className="flex items-center gap-2">
              <Check className="h-5 w-5 text-gold" />
              <span className="text-muted-foreground">Garantia de 7 dias</span>
            </div>
            <div className="flex items-center gap-2">
              <Check className="h-5 w-5 text-gold" />
              <span className="text-muted-foreground">Acesso imediato</span>
            </div>
            <div className="flex items-center gap-2">
              <Check className="h-5 w-5 text-gold" />
              <span className="text-muted-foreground">100% online</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
