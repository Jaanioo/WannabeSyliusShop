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

/* @SyliusShop/Common/Order/Label/PaymentState/orderPaymentState.html.twig */
class __TwigTemplate_1a2b8653ea73612af5e42d7ea152220b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Label/PaymentState/orderPaymentState.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Label/PaymentState/orderPaymentState.html.twig"));

        // line 2
        $context["viewOptions"] = ["authorized" => ["icon" => "check", "color" => "orange"], "awaiting_payment" => ["icon" => "clock", "color" => "grey"], "cancelled" => ["icon" => "ban", "color" => "red"], "paid" => ["icon" => "check", "color" => "green"], "partially_authorized" => ["icon" => "check", "color" => "yellow"], "partially_paid" => ["icon" => "adjust", "color" => "olive"], "partially_refunded" => ["icon" => "reply", "color" => "violet"], "refunded" => ["icon" => "reply all", "color" => "purple"]];
        // line 13
        echo "
";
        // line 14
        $context["value"] = ("sylius.ui." . (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 14, $this->source); })()));
        // line 15
        echo "
<div class=\"ui top attached label ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 16, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16), "color", [], "array", false, false, false, 16), "html", null, true);
        echo "\" style=\"margin-left: 1rem; width: calc(100% - 2rem); margin-top: 1rem;\">
    <i class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 17, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 17, $this->source); })()), [], "array", false, false, false, 17), "icon", [], "array", false, false, false, 17), "html", null, true);
        echo " icon\"></i>
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.state"), "html", null, true);
        echo ": <span id=\"order-payment-status\" ";
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("order-payment-state");
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })())), "html", null, true);
        echo "</span>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/Label/PaymentState/orderPaymentState.html.twig";
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
        return array (  61 => 18,  57 => 17,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
    set viewOptions = {
        authorized: { icon: \"check\", color: \"orange\" } ,
        awaiting_payment: { icon: \"clock\", color: \"grey\" } ,
        cancelled: { icon: \"ban\", color: \"red\" } ,
        paid: { icon: \"check\", color: \"green\" } ,
        partially_authorized: { icon: \"check\", color: \"yellow\" } ,
        partially_paid: { icon: \"adjust\", color: \"olive\" } ,
        partially_refunded: { icon: \"reply\", color: \"violet\" } ,
        refunded: { icon: \"reply all\", color: \"purple\" } ,
    }
%}

{% set value = 'sylius.ui.' ~ state %}

<div class=\"ui top attached label {{ viewOptions[state]['color'] }}\" style=\"margin-left: 1rem; width: calc(100% - 2rem); margin-top: 1rem;\">
    <i class=\"{{ viewOptions[state]['icon'] }} icon\"></i>
    {{ 'sylius.ui.state'|trans }}: <span id=\"order-payment-status\" {{ sylius_test_html_attribute('order-payment-state') }}>{{ value|trans }}</span>
</div>
", "@SyliusShop/Common/Order/Label/PaymentState/orderPaymentState.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Label/PaymentState/orderPaymentState.html.twig");
    }
}
