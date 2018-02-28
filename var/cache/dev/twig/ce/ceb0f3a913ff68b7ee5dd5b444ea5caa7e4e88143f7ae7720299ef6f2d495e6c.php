<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_20bd1685252e82cbe7df4e3acef6b758f4543e0fca594de48aaa67cbd560bea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd21b32310f90d8258b969bebd697d71083076be75ddb94bdaf667817b320d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd21b32310f90d8258b969bebd697d71083076be75ddb94bdaf667817b320d72->enter($__internal_cd21b32310f90d8258b969bebd697d71083076be75ddb94bdaf667817b320d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a2216be69badf4013fabd286b4d006b11f121677ecb03a32050e6af1dd444599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2216be69badf4013fabd286b4d006b11f121677ecb03a32050e6af1dd444599->enter($__internal_a2216be69badf4013fabd286b4d006b11f121677ecb03a32050e6af1dd444599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_cd21b32310f90d8258b969bebd697d71083076be75ddb94bdaf667817b320d72->leave($__internal_cd21b32310f90d8258b969bebd697d71083076be75ddb94bdaf667817b320d72_prof);

        
        $__internal_a2216be69badf4013fabd286b4d006b11f121677ecb03a32050e6af1dd444599->leave($__internal_a2216be69badf4013fabd286b4d006b11f121677ecb03a32050e6af1dd444599_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
