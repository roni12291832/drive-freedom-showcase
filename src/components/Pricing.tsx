import { Button } from "@/components/ui/button";
import { Check, ArrowRight, Lock, Zap } from "lucide-react";

const features = [
  "Acesso imediato ao curso completo",
  "Técnicas psicológicas comprovadas",
  "Exercícios práticos guiados",
  "Comunidade exclusiva de alunas",
  "Suporte especializado",
  "Atualizações gratuitas",
  "Acesso vitalício ao conteúdo",
  "Certificado de conclusão",
];

export const Pricing = () => {
  return (
    <section className="py-20 px-4 bg-gradient-to-b from-teal-light to-white">
      <div className="max-w-4xl mx-auto">
        <h2 className="text-2xl sm:text-3xl md:text-5xl font-bold text-teal text-center mb-6 px-4">
          Conquiste sua liberdade no volante hoje
        </h2>
        <p className="text-base sm:text-lg md:text-xl text-center text-muted-foreground mb-12 px-4">
          Investimento muito menor do que alguns dias de Uber para ter liberdade para sempre
        </p>

        <div className="bg-white rounded-3xl shadow-2xl p-8 md:p-12 border-4 border-gold">
          <div className="text-center mb-8">
            <span className="bg-gold text-teal px-6 py-2 rounded-full text-sm font-bold uppercase">
              Oferta Especial
            </span>
          </div>

          <div className="text-center mb-8">
            <div className="text-lg text-muted-foreground line-through mb-2">
              R$ 1.350,00
              <span className="text-sm ml-2">(valor do atendimento individual)</span>
            </div>
            <div className="text-5xl md:text-6xl font-bold text-teal mb-2">R$ 197,00</div>
            <div className="text-xl text-muted-foreground">ou 12x de R$ 20,27</div>
          </div>

          <div className="space-y-4 mb-8">
            {features.map((feature, index) => (
              <div key={index} className="flex items-start gap-3">
                <Check className="h-6 w-6 text-gold flex-shrink-0 mt-1" />
                <span className="text-lg text-foreground">{feature}</span>
              </div>
            ))}
          </div>

          <Button
            size="lg"
            className="w-full bg-gold hover:bg-gold/90 text-teal font-bold text-base sm:text-lg md:text-xl py-6 md:py-8 rounded-xl shadow-lg hover:shadow-xl transition-all"
            asChild
          >
            <a href="https://pay.kiwify.com.br/f1hS5iq" target="_blank" rel="noopener noreferrer" className="flex items-center justify-center">
              <span className="text-center">Sim, quero conquistar minha liberdade agora</span>
              <ArrowRight className="ml-2 h-5 w-5 md:h-6 md:w-6 flex-shrink-0" />
            </a>
          </Button>

          <div className="mt-8 p-6 bg-teal-light rounded-xl">
            <h4 className="font-bold text-teal text-lg mb-3">
              Garantia Incondicional de 7 Dias
            </h4>
            <p className="text-muted-foreground">
              Teste o Método MASD por 7 dias. Se não sentir resultados ou não gostar por qualquer
              motivo, devolvemos 100% do seu dinheiro. Sem perguntas, sem burocracia.
            </p>
          </div>

          <div className="mt-6 flex items-center justify-center gap-6 text-sm text-muted-foreground">
            <div className="flex items-center gap-2">
              <Lock className="h-4 w-4" />
              <span>Pagamento 100% seguro</span>
            </div>
            <div className="flex items-center gap-2">
              <Zap className="h-4 w-4" />
              <span>Acesso imediato após aprovação</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
