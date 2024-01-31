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

/* @SyliusAdmin/Security/_content.html.twig */
class __TwigTemplate_e8b607cf734187f8f777a8b1da54fba1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Security/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Security/_content.html.twig"));

        // line 1
        if ((isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusUi/Security/_login.html.twig", "@SyliusAdmin/Security/_content.html.twig", 2)->display(twig_array_merge($context, ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_login_check"), "paths" => ["logo" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/logo.png", "admin")]]));
        } else {
            // line 9
            echo "    ";
            $this->loadTemplate("@SyliusUi/Security/_login.html.twig", "@SyliusAdmin/Security/_content.html.twig", 9)->display(twig_array_merge($context, ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_login_check"), "paths" => ["logo" => "assets/admin/img/logo.png"]]));
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Security/_content.html.twig";
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
        return array (  49 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if use_webpack %}
    {% include '@SyliusUi/Security/_login.html.twig'
        with {
            'action': path('sylius_admin_login_check'),
            'paths': {'logo': asset('build/admin/images/logo.png', 'admin')}
        }
    %}
{% else %}
    {% include '@SyliusUi/Security/_login.html.twig'
        with {
            'action': path('sylius_admin_login_check'),
            'paths': {'logo': 'assets/admin/img/logo.png'}
        }
    %}
{% endif %}
", "@SyliusAdmin/Security/_content.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Security/_content.html.twig");
    }
}
