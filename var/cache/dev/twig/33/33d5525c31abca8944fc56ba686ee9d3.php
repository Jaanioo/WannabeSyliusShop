<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SyliusShop/Cart/Summary/_checkout.html.twig */
class __TwigTemplate_8557fa40069ba8771f420b5817baa4c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_checkout.html.twig"));

        // line 1
        echo "<button
    type=\"submit\"
    name=\"submit-type\"
    value=\"checkout\"
    class=\"ui huge primary fluid labeled icon button\"
    form=\"sylius_cart\"
    formaction=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_checkout");
        echo "\"
    formmethod=\"post\"
    ";
        // line 9
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-checkout-button");
        echo "
>
    <i class=\"check icon\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.checkout"), "html", null, true);
        echo "
</button>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_checkout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  61 => 11,  56 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button
    type=\"submit\"
    name=\"submit-type\"
    value=\"checkout\"
    class=\"ui huge primary fluid labeled icon button\"
    form=\"sylius_cart\"
    formaction=\"{{ path('sylius_shop_cart_checkout') }}\"
    formmethod=\"post\"
    {{ sylius_test_html_attribute('cart-checkout-button') }}
>
    <i class=\"check icon\"></i> {{ 'sylius.ui.checkout'|trans }}
</button>
", "@SyliusShop/Cart/Summary/_checkout.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_checkout.html.twig");
    }
}
