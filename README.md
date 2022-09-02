# AdvancedDebugger
AdvancedDebugger for PocketMine-MP

# TODO
- [X] use pocketmine\event\block\BlockBreakEvent;
- [X] use pocketmine\event\block\BlockBurnEvent;
- [X] use pocketmine\event\block\BlockFormEvent;
- [X] use pocketmine\event\block\BlockGrowEvent;
- [X] use pocketmine\event\block\BlockItemPickupEvent;
- [X] use pocketmine\event\block\BlockMeltEvent;
- [X] use pocketmine\event\block\BlockPlaceEvent;
- [X] use pocketmine\event\block\BlockSpreadEvent;
- [X] use pocketmine\event\block\BlockTeleportEvent;
- [X] use pocketmine\event\block\BlockUpdateEvent;
- [X] use pocketmine\event\block\BrewingFuelUseEvent;
- [X] use pocketmine\event\block\BrewItemEvent;
- [X] use pocketmine\event\block\ChestPairEvent;
- [ ] use pocketmine\event\block\BaseBlockChangeEvent; [abstract class]
- [ ] use pocketmine\event\block\BlockEvent; [abstract class]
- [ ] use pocketmine\event\block\LeavesDecayEvent;
- [ ] use pocketmine\event\block\SignChangeEvent;
- [ ] use pocketmine\event\block\StructureGrowEvent;
- [ ] use pocketmine\event\entity\EntityBlockChangeEvent;
- [ ] use pocketmine\event\entity\EntityCombustByBlockEvent;
- [ ] use pocketmine\event\entity\EntityCombustByEntityEvent;
- [ ] use pocketmine\event\entity\EntityCombustEvent;
- [ ] use pocketmine\event\entity\EntityDamageByBlockEvent;
- [ ] use pocketmine\event\entity\EntityDamageByChildEntityEvent;
- [ ] use pocketmine\event\entity\EntityDamageByEntityEvent;
- [ ] use pocketmine\event\entity\EntityDamageEvent;
- [ ] use pocketmine\event\entity\EntityDeathEvent;
- [ ] use pocketmine\event\entity\EntityDespawnEvent;
- [ ] use pocketmine\event\entity\EntityEffectAddEvent;
- [ ] use pocketmine\event\entity\EntityEffectEvent;
- [ ] use pocketmine\event\entity\EntityEffectRemoveEvent;
- [ ] use pocketmine\event\entity\EntityEvent;
- [ ] use pocketmine\event\entity\EntityExplodeEvent;
- [ ] use pocketmine\event\entity\EntityItemPickupEvent;
- [ ] use pocketmine\event\entity\EntityMotionEvent;
- [ ] use pocketmine\event\entity\EntityRegainHealthEvent;
- [ ] use pocketmine\event\entity\EntityShootBowEvent;
- [ ] use pocketmine\event\entity\EntitySpawnEvent;
- [ ] use pocketmine\event\entity\EntityTeleportEvent;
- [ ] use pocketmine\event\entity\EntityTrampleFarmlandEvent;
- [ ] use pocketmine\event\entity\ExplosionPrimeEvent;
- [ ] use pocketmine\event\entity\ItemDespawnEvent;
- [ ] use pocketmine\event\entity\ItemMergeEvent;
- [ ] use pocketmine\event\entity\ItemSpawnEvent;
- [ ] use pocketmine\event\entity\ProjectileHitBlockEvent;
- [ ] use pocketmine\event\entity\ProjectileHitEntityEvent;
- [ ] use pocketmine\event\entity\ProjectileHitEvent;
- [ ] use pocketmine\event\entity\ProjectileLaunchEvent;
- [ ] use pocketmine\event\inventory\CraftItemEvent;
- [ ] use pocketmine\event\inventory\FurnaceBurnEvent;
- [ ] use pocketmine\event\inventory\FurnaceSmeltEvent;
- [ ] use pocketmine\event\inventory\InventoryCloseEvent;
- [ ] use pocketmine\event\inventory\InventoryEvent;
- [ ] use pocketmine\event\inventory\InventoryOpenEvent;
- [ ] use pocketmine\event\inventory\InventoryTransactionEvent;
- [ ] use pocketmine\event\player\PlayerBedEnterEvent;
- [ ] use pocketmine\event\player\PlayerBedLeaveEvent;
- [ ] use pocketmine\event\player\PlayerBlockPickEvent;
- [ ] use pocketmine\event\player\PlayerBucketEmptyEvent;
- [ ] use pocketmine\event\player\PlayerBucketEvent;
- [ ] use pocketmine\event\player\PlayerBucketFillEvent;
- [ ] use pocketmine\event\player\PlayerChangeSkinEvent;
- [ ] use pocketmine\event\player\PlayerChatEvent;
- [ ] use pocketmine\event\player\PlayerCommandPreprocessEvent;
- [ ] use pocketmine\event\player\PlayerCreationEvent;
- [ ] use pocketmine\event\player\PlayerDataSaveEvent;
- [ ] use pocketmine\event\player\PlayerDeathEvent;
- [ ] use pocketmine\event\player\PlayerDisplayNameChangeEvent;
- [ ] use pocketmine\event\player\PlayerDropItemEvent;
- [ ] use pocketmine\event\player\PlayerDuplicateLoginEvent;
- [ ] use pocketmine\event\player\PlayerEditBookEvent;
- [ ] use pocketmine\event\player\PlayerEmoteEvent;
- [ ] use pocketmine\event\player\PlayerEntityInteractEvent;
- [ ] use pocketmine\event\player\PlayerEvent;
- [ ] use pocketmine\event\player\PlayerExhaustEvent;
- [ ] use pocketmine\event\player\PlayerExperienceChangeEvent;
- [ ] use pocketmine\event\player\PlayerGameModeChangeEvent;
- [ ] use pocketmine\event\player\PlayerInteractEvent;
- [ ] use pocketmine\event\player\PlayerItemConsumeEvent;
- [ ] use pocketmine\event\player\PlayerItemHeldEvent;
- [ ] use pocketmine\event\player\PlayerItemUseEvent;
- [ ] use pocketmine\event\player\PlayerJoinEvent;
- [ ] use pocketmine\event\player\PlayerJumpEvent;
- [ ] use pocketmine\event\player\PlayerKickEvent;
- [ ] use pocketmine\event\player\PlayerLoginEvent;
- [ ] use pocketmine\event\player\PlayerMoveEvent;
- [ ] use pocketmine\event\player\PlayerPostChunkSendEvent;
- [ ] use pocketmine\event\player\PlayerPreLoginEvent;
- [ ] use pocketmine\event\player\PlayerQuitEvent;
- [ ] use pocketmine\event\player\PlayerRespawnEvent;
- [ ] use pocketmine\event\player\PlayerToggleFlightEvent;
- [ ] use pocketmine\event\player\PlayerToggleGlideEvent;
- [ ] use pocketmine\event\player\PlayerToggleSneakEvent;
- [ ] use pocketmine\event\player\PlayerToggleSprintEvent;
- [ ] use pocketmine\event\player\PlayerToggleSwimEvent;
- [ ] use pocketmine\event\player\PlayerTransferEvent;
- [ ] use pocketmine\event\player\PlayerViewDistanceChangeEvent;
- [ ] use pocketmine\event\plugin\PluginDisableEvent;
- [ ] use pocketmine\event\plugin\PluginEnableEvent;
- [ ] use pocketmine\event\plugin\PluginEvent;
- [ ] use pocketmine\event\server\CommandEvent;
- [ ] use pocketmine\event\server\DataPacketReceiveEvent;
- [ ] use pocketmine\event\server\DataPacketSendEvent;
- [ ] use pocketmine\event\server\LowMemoryEvent;
- [ ] use pocketmine\event\server\NetworkInterfaceEvent;
- [ ] use pocketmine\event\server\NetworkInterfaceRegisterEvent;
- [ ] use pocketmine\event\server\NetworkInterfaceUnregisterEvent;
- [ ] use pocketmine\event\server\QueryRegenerateEvent;
- [ ] use pocketmine\event\server\ServerEvent;
- [ ] use pocketmine\event\server\UpdateNotifyEvent;
- [ ] use pocketmine\event\world\ChunkEvent;
- [ ] use pocketmine\event\world\ChunkLoadEvent;
- [ ] use pocketmine\event\world\ChunkPopulateEvent;
- [ ] use pocketmine\event\world\ChunkUnloadEvent;
- [ ] use pocketmine\event\world\SpawnChangeEvent;
- [ ] use pocketmine\event\world\WorldEvent;
- [ ] use pocketmine\event\world\WorldInitEvent;
- [ ] use pocketmine\event\world\WorldLoadEvent;
- [ ] use pocketmine\event\world\WorldSaveEvent;
- [ ] use pocketmine\event\world\WorldUnloadEvent;