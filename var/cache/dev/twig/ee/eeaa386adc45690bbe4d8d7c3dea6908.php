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

/* @SyliusAdmin/Customer/_info.html.twig */
class __TwigTemplate_480a1145623db5e4c7de35c917b7f4c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/_info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/_info.html.twig"));

        // line 1
        echo "<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\" class=\"header sylius-customer-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3, $this->source); })()), "fullName", [], "any", false, false, false, 3), "html", null, true);
        echo "</a>
        <div class=\"meta\">
            <span class=\"date\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 5, $this->source); })()), "createdAt", [], "any", false, false, false, 5)), "html", null, true);
        echo ".</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
            <i class=\"envelope icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "
        </a>
    </div>
    ";
        // line 14
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 14, $this->source); })()), "phoneNumber", [], "any", false, false, false, 14))) {
            // line 15
            echo "        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 18, $this->source); })()), "phoneNumber", [], "any", false, false, false, 18), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerIp", [], "any", true, true, false, 22) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "customerIp", [], "any", false, false, false, 22)))) {
            // line 23
            echo "        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "customerIp", [], "any", false, false, false, 26), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 30
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/_info.html.twig";
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
        return array (  103 => 30,  96 => 26,  91 => 23,  88 => 22,  81 => 18,  76 => 15,  74 => 14,  68 => 11,  63 => 9,  54 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"{{ path('sylius_admin_customer_show', {'id': customer.id}) }}\" class=\"header sylius-customer-name\">{{ customer.fullName }}</a>
        <div class=\"meta\">
            <span class=\"date\">{{ 'sylius.ui.customer_since'|trans }} {{ customer.createdAt|format_date }}.</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:{{ customer.email }}\">
            <i class=\"envelope icon\"></i>
            {{ customer.email }}
        </a>
    </div>
    {% if customer.phoneNumber is not empty %}
        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            {{ customer.phoneNumber }}
        </span>
        </div>
    {% endif %}
    {% if order.customerIp is defined and order.customerIp is not empty %}
        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            {{ order.customerIp }}
        </span>
        </div>
    {% endif %}
</div>
", "@SyliusAdmin/Customer/_info.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/_info.html.twig");
    }
}
