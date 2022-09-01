<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebuger;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockBurnEvent;
use pocketmine\event\block\BlockFormEvent;
use pocketmine\event\block\BlockGrowEvent;
use pocketmine\event\block\BlockItemPickupEvent;
use pocketmine\event\block\BlockMeltEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockSpreadEvent;
use pocketmine\event\block\BlockTeleportEvent;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\event\block\BrewingFuelUseEvent;
use pocketmine\event\block\BrewItemEvent;
use pocketmine\event\block\ChestPairEvent;
use pocketmine\event\Event;
use pocketmine\event\Listener;
use function end;
use function explode;
use function implode;
// TODO: use pocketmine\event\block\BaseBlockChangeEvent; [abstract class]
// TODO: use pocketmine\event\block\BlockEvent; [abstract class]
// TODO: use pocketmine\event\block\LeavesDecayEvent;
// TODO: use pocketmine\event\block\SignChangeEvent;
// TODO: use pocketmine\event\block\StructureGrowEvent;
// TODO: use pocketmine\event\entity\EntityBlockChangeEvent;
// TODO: use pocketmine\event\entity\EntityCombustByBlockEvent;
// TODO: use pocketmine\event\entity\EntityCombustByEntityEvent;
// TODO: use pocketmine\event\entity\EntityCombustEvent;
// TODO: use pocketmine\event\entity\EntityDamageByBlockEvent;
// TODO: use pocketmine\event\entity\EntityDamageByChildEntityEvent;
// TODO: use pocketmine\event\entity\EntityDamageByEntityEvent;
// TODO: use pocketmine\event\entity\EntityDamageEvent;
// TODO: use pocketmine\event\entity\EntityDeathEvent;
// TODO: use pocketmine\event\entity\EntityDespawnEvent;
// TODO: use pocketmine\event\entity\EntityEffectAddEvent;
// TODO: use pocketmine\event\entity\EntityEffectEvent;
// TODO: use pocketmine\event\entity\EntityEffectRemoveEvent;
// TODO: use pocketmine\event\entity\EntityEvent;
// TODO: use pocketmine\event\entity\EntityExplodeEvent;
// TODO: use pocketmine\event\entity\EntityItemPickupEvent;
// TODO: use pocketmine\event\entity\EntityMotionEvent;
// TODO: use pocketmine\event\entity\EntityRegainHealthEvent;
// TODO: use pocketmine\event\entity\EntityShootBowEvent;
// TODO: use pocketmine\event\entity\EntitySpawnEvent;
// TODO: use pocketmine\event\entity\EntityTeleportEvent;
// TODO: use pocketmine\event\entity\EntityTrampleFarmlandEvent;
// TODO: use pocketmine\event\entity\ExplosionPrimeEvent;
// TODO: use pocketmine\event\entity\ItemDespawnEvent;
// TODO: use pocketmine\event\entity\ItemMergeEvent;
// TODO: use pocketmine\event\entity\ItemSpawnEvent;
// TODO: use pocketmine\event\entity\ProjectileHitBlockEvent;
// TODO: use pocketmine\event\entity\ProjectileHitEntityEvent;
// TODO: use pocketmine\event\entity\ProjectileHitEvent;
// TODO: use pocketmine\event\entity\ProjectileLaunchEvent;
// TODO: use pocketmine\event\inventory\CraftItemEvent;
// TODO: use pocketmine\event\inventory\FurnaceBurnEvent;
// TODO: use pocketmine\event\inventory\FurnaceSmeltEvent;
// TODO: use pocketmine\event\inventory\InventoryCloseEvent;
// TODO: use pocketmine\event\inventory\InventoryEvent;
// TODO: use pocketmine\event\inventory\InventoryOpenEvent;
// TODO: use pocketmine\event\inventory\InventoryTransactionEvent;
// TODO: use pocketmine\event\player\PlayerBedEnterEvent;
// TODO: use pocketmine\event\player\PlayerBedLeaveEvent;
// TODO: use pocketmine\event\player\PlayerBlockPickEvent;
// TODO: use pocketmine\event\player\PlayerBucketEmptyEvent;
// TODO: use pocketmine\event\player\PlayerBucketEvent;
// TODO: use pocketmine\event\player\PlayerBucketFillEvent;
// TODO: use pocketmine\event\player\PlayerChangeSkinEvent;
// TODO: use pocketmine\event\player\PlayerChatEvent;
// TODO: use pocketmine\event\player\PlayerCommandPreprocessEvent;
// TODO: use pocketmine\event\player\PlayerCreationEvent;
// TODO: use pocketmine\event\player\PlayerDataSaveEvent;
// TODO: use pocketmine\event\player\PlayerDeathEvent;
// TODO: use pocketmine\event\player\PlayerDisplayNameChangeEvent;
// TODO: use pocketmine\event\player\PlayerDropItemEvent;
// TODO: use pocketmine\event\player\PlayerDuplicateLoginEvent;
// TODO: use pocketmine\event\player\PlayerEditBookEvent;
// TODO: use pocketmine\event\player\PlayerEmoteEvent;
// TODO: use pocketmine\event\player\PlayerEntityInteractEvent;
// TODO: use pocketmine\event\player\PlayerEvent;
// TODO: use pocketmine\event\player\PlayerExhaustEvent;
// TODO: use pocketmine\event\player\PlayerExperienceChangeEvent;
// TODO: use pocketmine\event\player\PlayerGameModeChangeEvent;
// TODO: use pocketmine\event\player\PlayerInteractEvent;
// TODO: use pocketmine\event\player\PlayerItemConsumeEvent;
// TODO: use pocketmine\event\player\PlayerItemHeldEvent;
// TODO: use pocketmine\event\player\PlayerItemUseEvent;
// TODO: use pocketmine\event\player\PlayerJoinEvent;
// TODO: use pocketmine\event\player\PlayerJumpEvent;
// TODO: use pocketmine\event\player\PlayerKickEvent;
// TODO: use pocketmine\event\player\PlayerLoginEvent;
// TODO: use pocketmine\event\player\PlayerMoveEvent;
// TODO: use pocketmine\event\player\PlayerPostChunkSendEvent;
// TODO: use pocketmine\event\player\PlayerPreLoginEvent;
// TODO: use pocketmine\event\player\PlayerQuitEvent;
// TODO: use pocketmine\event\player\PlayerRespawnEvent;
// TODO: use pocketmine\event\player\PlayerToggleFlightEvent;
// TODO: use pocketmine\event\player\PlayerToggleGlideEvent;
// TODO: use pocketmine\event\player\PlayerToggleSneakEvent;
// TODO: use pocketmine\event\player\PlayerToggleSprintEvent;
// TODO: use pocketmine\event\player\PlayerToggleSwimEvent;
// TODO: use pocketmine\event\player\PlayerTransferEvent;
// TODO: use pocketmine\event\player\PlayerViewDistanceChangeEvent;
// TODO: use pocketmine\event\plugin\PluginDisableEvent;
// TODO: use pocketmine\event\plugin\PluginEnableEvent;
// TODO: use pocketmine\event\plugin\PluginEvent;
// TODO: use pocketmine\event\server\CommandEvent;
// TODO: use pocketmine\event\server\DataPacketReceiveEvent;
// TODO: use pocketmine\event\server\DataPacketSendEvent;
// TODO: use pocketmine\event\server\LowMemoryEvent;
// TODO: use pocketmine\event\server\NetworkInterfaceEvent;
// TODO: use pocketmine\event\server\NetworkInterfaceRegisterEvent;
// TODO: use pocketmine\event\server\NetworkInterfaceUnregisterEvent;
// TODO: use pocketmine\event\server\QueryRegenerateEvent;
// TODO: use pocketmine\event\server\ServerEvent;
// TODO: use pocketmine\event\server\UpdateNotifyEvent;
// TODO: use pocketmine\event\world\ChunkEvent;
// TODO: use pocketmine\event\world\ChunkLoadEvent;
// TODO: use pocketmine\event\world\ChunkPopulateEvent;
// TODO: use pocketmine\event\world\ChunkUnloadEvent;
// TODO: use pocketmine\event\world\SpawnChangeEvent;
// TODO: use pocketmine\event\world\WorldEvent;
// TODO: use pocketmine\event\world\WorldInitEvent;
// TODO: use pocketmine\event\world\WorldLoadEvent;
// TODO: use pocketmine\event\world\WorldSaveEvent;
// TODO: use pocketmine\event\world\WorldUnloadEvent;

class EventListener implements Listener {

	protected Main $main;

	public function __construct(Main $main) {
		$this->main = $main;
	}

	private function getMain() : Main {
		return $this->main;
	}

	private function getEventName(Event $event) : string {
		$names = explode("\\", $event->getEventName());
		return end($names);
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockBreak(BlockBreakEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$drops = $event->getDrops();
		$drops = implode("", $drops);
		$instaBreak = $event->getInstaBreak();
		$item = $event->getItem();
		$player = $event->getPlayer();
		$playerName = $player->getName();
		$xpDropAmount = $event->getXpDropAmount();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | Drops: [$drops] | InstaBreak: $instaBreak | Item: $item | Player: $player [$playerName] | XpDropAmount: $xpDropAmount");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockBurn(BlockBurnEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$causingBlock = $event->getCausingBlock();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | CausingBlock: $causingBlock");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockForm(BlockFormEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$newState = $event->getNewState();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | NewState: $newState");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockGrow(BlockGrowEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$newState = $event->getNewState();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | NewState: $newState");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockItemPickup(BlockItemPickupEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		// TODO: $inventory = $event->getInventory();
		$item = $event->getItem();
		$origin = $event->getOrigin();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | Item: $item | Origin: $origin");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockMelt(BlockMeltEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$newState = $event->getNewState();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | NewState: $newState");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockPlace(BlockPlaceEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$blockAgainst = $event->getBlockAgainst();
		$blockReplaced = $event->getBlockReplaced();
		$item = $event->getItem();
		$player = $event->getPlayer();
		$playerName = $player->getName();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | BlockAgainst: [$blockAgainst] | BlockReplaced: $blockReplaced | Item: $item | Player: $player [$playerName]");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockSpread(BlockSpreadEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$newState = $event->getNewState();
		$source = $event->getSource();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | NewState: $newState | Source: $source");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockTeleport(BlockTeleportEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$to = $event->getTo();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | To: $to");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBlockUpdate(BlockUpdateEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition]");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBrewingFuelUse(BrewingFuelUseEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$brewingStand = $event->getBrewingStand();
		$fuelTime = $event->getFuelTime();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | BrewingStand: $brewingStand | FuelTime: $fuelTime");
	}

	/**
	 * @handleCancelled true
	 */
	public function onBrewItem(BrewItemEvent $event) : void {
		$eventName = $this->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$brewingStand = $event->getBrewingStand();
		$input = $event->getInput();
		$recipe = $event->getRecipe();
		$result = $event->getResult();
		$slot = $event->getSlot();
		$this->getMain()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | BrewingStand: $brewingStand | Input: $input | Recipe: $recipe | Result: $result | Slot: $slot");
	}

	/**
	 * @handleCancelled true
	 */
	public function onChestPair(ChestPairEvent $event) : void {
		$eventName = $this->getEventName($event);
		$left = $event->getLeft();
		$leftPosition = $left->getPosition();
		$right = $event->getRight();
		$rightPosition = $right->getPosition();
		$this->getMain()->debug($eventName, "EventName: $eventName | Left: $left [$leftPosition] | Right: $right [$rightPosition]");
	}
}
