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

/* @SyliusAdmin/Dashboard/_channelSwitchContent.html.twig */
class __TwigTemplate_f5c5b19abd0c1d07d324989758410cc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_channelSwitchContent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_channelSwitchContent.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 1, $this->source); })())) > 1)) {
            // line 2
            echo "
";
            // line 3
            $context["selected"] = twig_first($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 3, $this->source); })()));
            // line 4
            $context["code"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "get", ["channel"], "method", false, false, false, 4);
            // line 5
            echo "
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 7
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 7) === (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 7, $this->source); })()))) {
                    // line 8
                    echo "        ";
                    $context["selected"] = $context["channel"];
                    // line 9
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
<div class=\"ui floating dropdown labeled icon button\">
    <i class=\"share alternate icon\"></i>
    <span class=\"text\">
        ";
            // line 15
            $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "@SyliusAdmin/Dashboard/_channelSwitchContent.html.twig", 15)->display(twig_array_merge($context, ["channel" => (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 15, $this->source); })())]));
            // line 16
            echo "    </span>
    <div class=\"menu\">
        ";
            // line 18
            echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.dashboard.channel_switch_menu", $context);
            echo "
    </div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_channelSwitchContent.html.twig";
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
        return array (  84 => 18,  80 => 16,  78 => 15,  72 => 11,  65 => 9,  62 => 8,  59 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if channels|length > 1 %}

{% set selected = channels|first %}
{% set code = app.request.query.get('channel') %}

{% for channel in channels %}
    {% if channel.code is same as(code) %}
        {% set selected = channel %}
    {% endif %}
{% endfor %}

<div class=\"ui floating dropdown labeled icon button\">
    <i class=\"share alternate icon\"></i>
    <span class=\"text\">
        {% include '@SyliusAdmin/Common/_channel.html.twig' with {'channel': selected} %}
    </span>
    <div class=\"menu\">
        {{ sylius_template_event('sylius.admin.dashboard.channel_switch_menu', _context) }}
    </div>
</div>
{% endif %}
", "@SyliusAdmin/Dashboard/_channelSwitchContent.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_channelSwitchContent.html.twig");
    }
}
